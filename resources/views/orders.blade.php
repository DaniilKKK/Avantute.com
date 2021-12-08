@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Клиент</th>
        <th scope="col">Сотрудник</th>
        <th scope="col">Тур</th>
        <th scope="col">Сервис</th>
        <th scope="col">Цена</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
        <tr align="center">
          <td>{{ $order->client->fullName }}</td>
          <td>{{ $order->collaborator->fullName }}</td>
          <td><a href="/tours/{{$order->tour->id}}">{{ $order->tour->name }}</a></td>
          <td>{{ $order->tour->service->name }}</td>
          <td>{{ $order->tour->price }}</td>

          <td>
            <a href="/admin/orders/{{$order->id}}">
              Редактировать заказ
            </a>
          </td>

          <td>

          <form method="POST" action="{{route('orders.destroy', $order->id)}}" class="d-flex justify-content-center">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" id="delete_button" value="Delete order">
          </form>

          </td>

        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection