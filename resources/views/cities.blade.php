@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Страна</th>
        <th scope="col">Город</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Delete</th>
		 <th scope="col">Add</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cities as $city)
        <tr align="center">
          <td>{{ $city->country->name }}</td>
          <td>{{ $city->name }}</td>

          <td>
            <a href="/admin/cities/{{$city->id}}">
              Редактировать город
            </a>
          </td>
		  

          <td>

          <form method="POST" action="{{route('cities.destroy', $city->id)}}" class="d-flex justify-content-center">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" id="delete_button" value="Delete city">
          </form>

          </td>
		  
		   <td>
            <a href="{{ url('/admin/addCity') }}">
              Добавить город
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection