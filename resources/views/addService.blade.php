@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form method="post" enctype="multipart/form-data" style="text-align: center">
  @csrf
    <div class="form-group">
      <label for="name">Наименование:</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="vehicle">Транаспорт:</label>
      <select name="vehicle_id" id="vehicle" class="form-control form-control-sm" required>
      @foreach ($vehicles as $vehicle)
        <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="city">Город:</label>
      <select name="city_id" id="city" class="form-control form-control-sm" required>
      @foreach ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="visa_service">Visa:</label>
      <input type="text" name="visa_service" id="visa_service" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="habitation">Проживание:</label>
      <input type="text" name="habitation" id="habitation" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="food">Питание:</label>
      <input type="text" name="food" id="food" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="excursions">Экскурсии:</label>
      <input type="text" name="excursions" id="excursions" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="departure_date">Дата отправления:</label>
      <input type="date" name="departure_date" id="departure_date" class="form-control form-control-sm" required>
    </div>

    <div class="form-group">
      <label for="arrival_date">Дата прибытия:</label>
      <input type="date" name="arrival_date" id="arrival_date" class="form-control form-control-sm" required>
    </div>

    <div class="form-group">
      <input type="submit" value="Добавить" class="btn btn-primary">
    </div>
  </form>
</div>

@endsection