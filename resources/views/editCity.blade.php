@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form method="post" enctype="multipart/form-data" style="text-align: center">
  @csrf
  @method('PUT')

    <div class="form-group">
      <label for="country">Страна:</label>
      <select name="country_id" id="country" class="form-control form-control-sm" required>
      @foreach ($countries as $country)
        <option 
        @if ($city->country_id == $country->id)
            selected
        @endif
        value="{{ $country->id }}">{{ $country->name }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="name">Название:</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $city->name }}" required>
    </div>

    <div class="form-group">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </form>
</div>

@endsection