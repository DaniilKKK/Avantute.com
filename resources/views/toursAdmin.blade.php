@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Тур</th>
        <th scope="col">Страна</th>
        <th scope="col">Город</th>
        <th scope="col">Транспорт</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Delete</th>
        <th scope="col">Add</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tours as $tour)
        <tr align="center">
          <td>{{ $tour->name }}</td>
          <td>{{ $tour->service->city->country->name }}</td>
          <td>{{ $tour->service->city->name }}</td>
          <td>{{ $tour->service->vehicle->name }}</td>

          <td>
            <a href="/admin/tours/{{$tour->id}}">
              Редактировать тур
            </a>
          </td>

          <td>

          <form method="POST" action="{{route('tours.destroy', $tour->id)}}" class="d-flex justify-content-center">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" id="delete_button" value="Delete tour">
          </form>

          </td>


          <td>
            <a href="{{ url('/admin/addTour') }}">
              Добавить тур
            </a>
          </td>

      @endforeach
    </tbody>
  </table>
</div>


@endsection