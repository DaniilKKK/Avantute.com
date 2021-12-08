@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Сервис</th>
        <th scope="col">Страна</th>
        <th scope="col">Город</th>
        <th scope="col">Транспорт</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Delete</th>
		 <th scope="col">Add</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($services as $service)
        <tr align="center">
          <td>{{ $service->name }}</td>
          <td>{{ $service->city->country->name }}</td>
          <td>{{ $service->city->name }}</td>
          <td>{{ $service->vehicle->name }}</td>

          <td>
            <a href="/admin/services/{{$service->id}}">
             Редактировать
            </a>
          </td>

          <td>

          <form method="POST" action="{{route('services.destroy', $service->id)}}" class="d-flex justify-content-center">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" id="delete_button" value="Delete service">
          </form>

          </td>
		  
		   <td>
            <a href="{{ url('/admin/addService') }}">
             Добавить сервис
            </a>
          </td>

      @endforeach
    </tbody>
  </table>
</div>


@endsection