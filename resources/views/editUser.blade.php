@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form method="post" enctype="multipart/form-data" style="text-align: center">
  @csrf
  @method('PUT')
    <div class="form-group row">
        <label for="fullName" class="col-md-4 col-form-label text-md-right">{{ __('Полное имя') }}</label>

        <div class="col-md-6">
            <input id="fullName" type="text" pattern="[A-Za-zА-Яа-яЁё]{3,100} [A-Za-zА-Яа-яЁё]{3,100} [A-Za-zА-Яа-яЁё]{3,100}" class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ $user->fullName }}" required autocomplete="fullName" autofocus>

            @error('fullName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
      <label for="role"  class="col-md-4 col-form-label text-md-right">Роль:</label>
      <select name="role_id" id="role" class="col-md-6" required>
      @foreach ($roles as $role)
        <option 
        @if ($user->role_id == $role->id)
            selected
        @endif
        value="{{ $role->id }}">{{ $role->name }}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

        <div class="col-md-6">
            <input id="login" type="text" pattern="[a-zA-Z][0-9a-zA-Z]*|[а-яА-ЯёЁ][0-9а-яА-ЯёЁ]*" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ $user->login }}" required autocomplete="login">

            @error('login')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Номер телефона') }}</label>

        <div class="col-md-6">
            <input id="phoneNumber" type="tel" pattern="+[0-9]{10,15}" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ $user->phoneNumber }}" required autocomplete="phoneNumber">

            @error('phoneNumber')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Адрес') }}</label>

        <div class="col-md-6">
            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address">

            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

        <div class="col-md-6">
            <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ $user->position }}" required autocomplete="position">

            @error('position')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-4 col-form-label text-md-right">
        </div>
        <div class="col-md-6">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </div>

  </form>
</div>

@endsection