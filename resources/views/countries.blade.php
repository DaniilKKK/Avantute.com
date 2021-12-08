@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Страна</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Delete</th>
		<th scope="col">Add</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($countries as $country)
        <tr align="center">
          <td>{{ $country->name }}</td>

          <td>
            <a href="/admin/countries/{{$country->id}}">
             Редактировать страну
            </a>
          </td>

          <td>

          <form method="POST" action="{{route('countries.destroy', $country->id)}}" class="d-flex justify-content-center">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" id="delete_button" value="Delete country">
          </form>

          </td>
		  
		  <td>
            <a  href="{{ url('/admin/addCountry') }}">
           Добавить страну
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection