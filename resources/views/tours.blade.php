@extends('layouts.index')

@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded" style="font-family: Times New Roman;
    text-align: center; font-size:30px;">Популярные направления</div>
    
	<div class="container-fluid">
        <div class="row">
            @foreach ($tours as $tour)

                <div class="col-lg-2">
                    <a href="/card/{{ $tour->id }}" style="color: rgba(255, 255, 255,.7);">
                        <div><img src="/stat/images/tours/{{ $tour->image }}" width="220" height="180"></div>
                        <div class="centered">{{ $tour->name }}</div>
                    </a>
                </div>
            @endforeach
		</div>
  </div>
	
   <hr>
   
     <div class="shadow-lg p-3 mb-5 bg-white rounded" style="font-family: Times New Roman;
    text-align: center; font-size:30px; color: black;">Выбрать подходящий тур</div>
    
	
	<div class="container-fluid">
    <form  method="get" >
      <div id="action_form">
        <div class="row">
          <div class="col-lg-3">
            <label for="where">Куда</label>
            <select name="city_id" id="city" class="form-control" required>
            @foreach ($cities as $city)
              <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
            </select>
          </div>
          <div class="col-lg-2">
            <label for="whereFor">Откуда</label>
            <input type="text" class="form-control" placeholder="Москва">
          </div>
          <div class="col-lg-2">
            <label for="departure_date">Дата вылета</label>
            <input type="date" name="departure_date" class="form-control" placeholder="12.12.2020">
          </div>
          <div class="col-lg-2">
            <label for="arrival_date">Дата приезда</label>
            <input type="date" name="arrival_date" class="form-control" placeholder="20.12.2020">
          </div>
          <div class="col-lg-2">
            <label for="people">Количество туристов</label>
            <select id="people" name="people" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="col-lg-1">
            <button type="submit" class="btn btn-primary" style="height:50px; margin-top:30px; ">Найти</button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection