@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form method="post" enctype="multipart/form-data" style="text-align: center">
  @csrf
  @method('PUT')

    <div class="form-group">
      <label for="name">Название:</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $country->name }}" required>
    </div>

    <div class="form-group">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </form>
</div>

@endsection