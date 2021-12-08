@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form method="post" enctype="multipart/form-data" style="text-align: center">
  @csrf

    <div class="form-group">
      <label for="country">Страна:</label>
      <select name="country_id" id="country" class="form-control form-control-sm" required>
      @foreach ($countries as $country)
        <option value="{{ $country->id }}">{{ $country->name }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="name">Название:</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
      <input type="submit" value="Добавить" class="btn btn-primary">
    </div>
  </form>
</div>

@endsection