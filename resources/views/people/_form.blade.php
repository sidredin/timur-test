<div class="form-group">
    <label for="lastname">Фамилия</label>
    <input type="text" name="lastname" value="{{ old('lastname', $person->lastname ?? null) }}" class="form-control">
</div>
<div class="form-group">
    <label for="firstname">Имя</label>
    <input type="text" name="firstname" value="{{ old('firstname', $person->firstname ?? null) }}" class="form-control">
</div>
<div class="form-group">
    <label for="snils">СНИЛС</label>
    <input type="text" name="snils" value="{{ old('snils', $person->snils ?? null) }}" class="form-control">
</div>
<div class="form-group">
    <label for="sex">Пол</label>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" name="sex" value="М" class="custom-control-input"
            {{ old('sex', $person->sex ?? null) == "М" ? 'checked' : '' }}
        >
        <label class="custom-control-label" for="customRadioInline1">М</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="sex" value="Ж" class="custom-control-input"
            {{ old('sex', $person->sex ?? null) == "Ж" ? 'checked' : '' }}
        >
        <label class="custom-control-label" for="customRadioInline2">Ж</label>
    </div>
</div>
<div class="form-group">
    <label for="birthdate">Дата рождения</label>
    <input type="text" name="birthdate" value="{{ old('birthdate', $person->birthdate ?? null) }}" class="form-control">
</div>
<div class="form-group">
    <label for="country_id">Страна гражданства</label>
    <select name="country_id" class="custom-select">
        <option selected>Выберите страну</option>
        @foreach($countries as $country)
            <option
                value="{{ $country->id }}"
                {{ old('country_id', $person->country_id ?? null) == $country->id ? 'selected' : '' }}
            >
                {{ $country->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="health_status_id">Состояние здоровья</label>
    <select name="health_status_id" class="custom-select">
        <option selected>Выберите cостояние здоровья</option>
        @foreach($healthStatuses as $healthStatus)
            <option
                value="{{ $healthStatus->id }}"
                {{ old('health_status_id', $person->health_status_id ?? null) == $healthStatus->id ? 'selected' : '' }}
            >
                {{ $healthStatus->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="with_father">С отцом</label>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline3" name="with_father" value="1" class="custom-control-input"
            {{ old('with_father', $person->with_father ?? null) == "1" ? 'checked' : '' }}
        >
        <label class="custom-control-label" for="customRadioInline3">Да</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline4" name="with_father" value="0" class="custom-control-input"
            {{ old('with_father', $person->with_father ?? null) == "0" ? 'checked' : '' }}
        >
        <label class="custom-control-label" for="customRadioInline4">Нет</label>
    </div>
</div>

<div class="form-group">
    <label for="with_mother">С матерью</label>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline5" name="with_mother" value="1" class="custom-control-input"
            {{ old('with_mother', $person->with_mother ?? null) == "1" ? 'checked' : '' }}
        >
        <label class="custom-control-label" for="customRadioInline5">Да</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline6" name="with_mother" value="0" class="custom-control-input"
            {{ old('with_mother', $person->with_mother ?? null) == "0" ? 'checked' : '' }}
        >
        <label class="custom-control-label" for="customRadioInline6">Нет</label>
    </div>
</div>

<div class="form-group">
    <label for="speсiality">Профессия</label>
    <input type="text" name="speсiality" value="{{ old('speсiality', $person->speсiality ?? null) }}" class="form-control">
</div>

<div class="form-group">
    <label for="description">Комментарий</label>
    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $person->description ?? null) }}</textarea>
</div>

@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
