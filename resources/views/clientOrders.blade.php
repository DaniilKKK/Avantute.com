@extends('layouts.index')

@section('content')

<div class="d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Клиент</th>
        <th scope="col">Сотрдуник</th>
        <th scope="col">Тур</th>
        <th scope="col">Сервис</th>
        <th scope="col">Цена</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
        <tr align="center">
          <td>{{ $order->client->fullName }}</td>
          <td>{{ $order->collaborator->fullName }}</td>
          <td>{{ $order->tour->name }}</td>
          <td>{{ $order->tour->service->name }}</td>
          <td>{{ $order->tour->price }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection