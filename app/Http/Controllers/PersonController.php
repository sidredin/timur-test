<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerson;
use App\Models\Country;
use App\Models\HealthStatus;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'people.index',
            ['people' => Person::select('id', 'firstname', 'lastname', 'birthdate')->get()]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::select('id', 'name')->get();
        $healthStatuses = HealthStatus::all();
        return view('people.create', ['countries' => $countries, 'healthStatuses' => $healthStatuses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerson $request)
    {
        $validatedData = $request->validated();
        $person = Person::create($validatedData);

        $request->session()->flash('status', 'Пациент добавлен!');

        return redirect()->route('people.show', ['person' => $person->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $person = Person::with('phones')->findOrFail($id);
        $phones = $person->phones;
        dump($phones);
        $phones = $phones->sortBy('phone_type_id')->all();
        return view('people.show', ['person' => $person, 'phones' => $phones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);
        $countries = Country::select('id', 'name')->get();
        $healthStatuses = HealthStatus::all();
        dump($person);

        return view('people.edit', ['person' => $person, 'countries' => $countries, 'healthStatuses' => $healthStatuses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePerson $request, $id)
    {
        $person = Person::findOrFail($id);
        $validatedData = $request->validated();

        $person->fill($validatedData);
        $person->save();
        $request->session()->flash('status', 'Данные пациента изменены!');

        return redirect()->route('people.show', ['person' => $person->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $person = Person::with('phones', 'documents')->findOrFail($id);
        foreach ($person->phones as $phone) {
            $phone->delete();
        }
        foreach ($person->documents as $document) {
            foreach ($document->files as $file) {
                $file->delete();
            }
            $document->delete();
        }
        $person->delete();
        $request->session()->flash('status', 'Пациент удалён!');

        return redirect()->route('people.index');
    }
}
