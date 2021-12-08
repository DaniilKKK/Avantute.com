@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Роль</th>
        <th scope="col">Полное имя</th>
        <th scope="col">Email</th>
        <th scope="col">Номер телефона</th>
        <th scope="col">Login</th>
        <th scope="col">Статус</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr align="center">
          <td style="font-weight: bold">{{ $user->role->name }}</td>
          <td>{{ $user->fullName }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phoneNumber }}</td>
          <td>{{ $user->login }}</td>
          <td>
            <form method="post" action="/admin/users/{{$user->id}}">
            @csrf
              <input type="submit" name="ban" class="btn btn-primary" value="{{ $user->blocked ? 'Unban' : 'Ban' }}">
            </form>
          </td>
          <td>
            <a href="/admin/users/{{$user->id}}">
              Редактировать
            </a>
          </td>
          <td>

            <form method="POST" action="{{route('users.destroy', $user->id)}}" class="d-flex justify-content-center">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" id="delete_button" value="Delete user">
            </form>

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection