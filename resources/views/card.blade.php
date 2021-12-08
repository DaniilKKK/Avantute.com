@extends('layouts.index')

@section('content')

<div class="fullscreen_card">
  <form enctype="multipart/form-data" id="edit_form" method="post">
  @csrf
  @method('PUT')
    <div class="image_block d-flex flex-wrap justify-content-around align-items-center">
      <div class="tour_part">
        <h2>Tour: 
          <input class="edit d-none" name="name" style="width: 150px;"/> 
          <span class="property_value">{{ $tour->name }}</span>
        </h2>
        <img src="/stat/images/tours/{{ $tour->image }}" style="height: 450px; width: 675px;">
      </div>
    </div>
    <div class="information d-flex justify-content-around px-3 pt-3">
      <div>
        <span class="property_name">Продолжительность:</span>
        <input class="edit d-none" name="duration" style="width: 75px;"/>
        <span class="property_value">{{ $tour->duration }}</span>
      </div>
      <div>
        <span class="property_name">Количество человек:</span>
        <select class="edit d-none" name="people" style="width: 75px;">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <span class="property_value">{{ $tour->people }}</span>
      </div>
      <div>
        <span class="property_name">Цена:</span>
        <input class="edit d-none" name="price" style="width: 75px;"/> 
        $<span class="property_value">{{ $tour->price }}</span>
      </div>
    </div>
    <div class="description py-3 d-flex justify-content-center">
      <textarea class="edit d-none" name="description" style="resize: none; text-align: center; width:1700px;"></textarea>
      <p style="text-align: center; height: auto;">
        <span class="property_value" style="display:block; width:1100px;">{{ $tour->description }}</span>
      </p>
    </div>
    <div class="description py-3 d-flex justify-content-center">
    Город: {{ $tour->service->city->name }}
    </div>
    <div class="description py-3 d-flex justify-content-center">
    Транспорт: {{ $tour->service->vehicle->name }}
    </div>
    <div class="description py-3 d-flex justify-content-center">
    Visa: {{ $tour->service->visaService }}
    </div>
    <div class="description py-3 d-flex justify-content-center">
    Проживание: {{ $tour->service->habitation }}
    </div>
    <div class="description py-3 d-flex justify-content-center">
    Питание: {{ $tour->service->food }}
    </div>
    <div class="description py-3 d-flex justify-content-center">
    Экскурсии: {{ $tour->service->excursions }}
    </div>
    <div class="description py-3 d-flex justify-content-center">
    Дата отправления: {{ $tour->service->departureDate }}
    </div>
    <div class="description py-3 d-flex justify-content-center">
    Дата прибытия: {{ $tour->service->arrivalDate }}
    </div>
  </form>
@auth
  @if (auth()->user()->blocked == 0)
    <form method="POST" action="{{route('tours.order', $tour->id)}}" class="d-flex justify-content-center">
      @csrf
      <button type="submit" class="btn btn-primary" id="order_button">Подтвердить</button>
    </form>
  @endif
  @if (auth()->user()->blocked == 1)
    <div>
    Вы забанены
  
    Свяжитесь с администратором
  </div>
  @endif
 @endauth
</div>

@endsection