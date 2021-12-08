@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Транспорт</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Delete</th>
		<th scope="col">Add</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($vehicles as $vehicle)
        <tr align="center">
          <td>{{ $vehicle->name }}</td>

          <td>
            <a href="/admin/vehicles/{{$vehicle->id}}">
              Редактировать
            </a>
          </td>

          <td>

          <form method="POST" action="{{route('vehicles.destroy', $vehicle->id)}}" class="d-flex justify-content-center">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" id="delete_button" value="Delete vehicle">
          </form>

          </td>
		  
		   <td>
            <a href="{{ url('/admin/addVehicle') }}">
              Добавить транспорт
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection