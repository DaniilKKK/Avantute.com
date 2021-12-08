@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form method="post" enctype="multipart/form-data" style="text-align: center">
  @csrf
  @method('PUT')

    <div class="form-group row">
      <label for="tour"  class="col-md-4 col-form-label text-md-right">Тур:</label>
      <select name="tour_id" id="tour" class="col-md-6" required>
      @foreach ($tours as $tour)
        <option 
        @if ($order->tour_id == $tour->id)
            selected
        @endif
        value="{{ $tour->id }}">{{ $tour->name }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group row">
      <label for="client"  class="col-md-4 col-form-label text-md-right">Клиент:</label>
      <select name="client_id" id="client" class="col-md-6" required>
      @foreach ($clients as $client)
        <option 
        @if ($order->client_id == $client->id)
            selected
        @endif
        value="{{ $client->id }}">{{ $client->fullName }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group row">
      <label for="collaborator"  class="col-md-4 col-form-label text-md-right">Сотрудник:</label>
      <select name="collaborator_id" id="collaborator" class="col-md-6" required>
      @foreach ($collaborators as $collaborator)
        <option 
        @if ($order->collaborator_id == $collaborator->id)
            selected
        @endif
        value="{{ $collaborator->id }}">{{ $collaborator->fullName }}</option>
      @endforeach
      </select>
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