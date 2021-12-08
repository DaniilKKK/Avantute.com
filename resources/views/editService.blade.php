@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form method="post" enctype="multipart/form-data" style="text-align: center">
  @csrf
  @method('PUT')

  <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Название') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $service->name }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
      <label for="city"  class="col-md-4 col-form-label text-md-right">Город:</label>
      <select name="city_id" id="city" class="col-md-6" required>
      @foreach ($cities as $city)
        <option 
        @if ($service->city_id == $city->id)
            selected
        @endif
        value="{{ $city->id }}">{{ $city->name }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group row">
      <label for="vehicle"  class="col-md-4 col-form-label text-md-right">Транспорт:</label>
      <select name="vehicle_id" id="vehicle" class="col-md-6" required>
      @foreach ($vehicles as $vehicle)
        <option 
        @if ($service->vehicle_id == $vehicle->id)
            selected
        @endif
        value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group row">
        <label for="visa_service" class="col-md-4 col-form-label text-md-right">{{ __('Visa') }}</label>

        <div class="col-md-6">
            <input id="visa_service" type="text" class="form-control @error('visa_service') is-invalid @enderror" name="visa_service" value="{{ $service->visaService }}" required autocomplete="visa_service">

            @error('visa_service')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="habitation" class="col-md-4 col-form-label text-md-right">{{ __('Проживание') }}</label>

        <div class="col-md-6">
            <input id="habitation" type="text" class="form-control @error('habitation') is-invalid @enderror" name="habitation" value="{{ $service->habitation }}" required autocomplete="habitation">

            @error('habitation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="food" class="col-md-4 col-form-label text-md-right">{{ __('Питание') }}</label>

        <div class="col-md-6">
            <input id="food" type="text" class="form-control @error('food') is-invalid @enderror" name="food" value="{{ $service->food }}" required autocomplete="food">

            @error('food')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="excursions" class="col-md-4 col-form-label text-md-right">{{ __('Экскурсии') }}</label>

        <div class="col-md-6">
            <input id="excursions" type="text" class="form-control @error('excursions') is-invalid @enderror" name="excursions" value="{{ $service->excursions }}" required autocomplete="excursions">

            @error('excursions')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="departure_date" class="col-md-4 col-form-label text-md-right">Дата отправления:</label>
        <div class="col-md-6">
            <input type="date" name="departure_date" id="departure_date" class="form-control form-control-sm" value="{{ $service->departureDate }}" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="arrival_date" class="col-md-4 col-form-label text-md-right">Дата прибытия</label>
        <div class="col-md-6">
            <input type="date" name="arrival_date" id="arrival_date" class="form-control form-control-sm" value="{{ $service->arrivalDate }}" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-4 col-form-label text-md-right">
        </div>
        <div class="col-md-6">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </div>

  </form>
</div>

@endsection