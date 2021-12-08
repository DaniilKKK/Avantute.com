@extends('layouts.index')

@section('content')

<div class="d-flex justify-content-around">
  <table class="table table-borderless">
    <tbody>
      <tr align="center">
        <th scope="col">Роль:</td>
        <td>{{ auth()->user()->role->name }}</td>
      </tr>
      <tr align="center">
        <th scope="col">Полное имя:</td>
        <td>{{ auth()->user()->fullName }}</td>
      </tr>
      <tr align="center">
        <th scope="col">Email:</td>
        <td>{{ auth()->user()->email }}</td>
      </tr>
      <tr align="center">
        <th scope="col">Номер телефона:</td>
        <td>{{ auth()->user()->phoneNumber }}</td>
      </tr>
      <tr align="center">
        <th scope="col">Login:</td>
        <td>{{ auth()->user()->login }}</td>
      </tr>
      @if (auth()->user()->blocked == 1)
        <tr align="center">
          <td><span style="font-weight: bold">Статус:</span></td>
          <td><span style="font-weight: bold">Блокировать</span></td>
        </tr>
      @endif
    </tbody>
  </table>
</div>

@endsection