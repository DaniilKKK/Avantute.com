@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form action="{{route('tours.add')}}" method="POST" enctype="multipart/form-data" style="text-align: center">
  @csrf
  @method('POST')
    <div class="form-group">
      <label for="name">Название:</label>
      <input type="text" name="name" id="name" class="form-control form-control-sm" required>
    </div>
    <div class="form-group">
      <label for="people">Количество человек:</label>
      <select id="people" name="people" class="form-control form-control-sm" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="price">Цена:</label>
      <input type="number" name="price" id="price" class="form-control form-control-sm" required>
    </div>
    <div class="form-group">
      <label for="duration">Продолжительность:</label>
      <input type="number" min="1" max="31" name="duration" id="duration" class="form-control form-control-sm" required>
    </div>
    <div class="form-group">
      <label for="description">Описание:</label>
      <textarea name="description" id="description" class="form-control form-control-sm" required></textarea>
    </div>
    <div class="form-group">
      <label for="service">Сервис:</label>
      <select name="service_id" id="service" class="form-control form-control-sm" required>
      @foreach ($services as $service)
        <option value="{{ $service->id }}">{{ $service->name }}</option>
      @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="image">Изображение:</label>
      <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" class="form-control-file" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
  </form>
</div>

@endsection