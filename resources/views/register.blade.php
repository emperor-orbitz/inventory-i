@extends('layouts.app')
@section('title', 'Login')
@section('app_content')

Register Page

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('auth.register') }}" method="POST">
    @csrf
    <input name='name' pattern="[a-zA-Z]{5,100}" required placeholder='Input your name' />
    <input name='email' type="email" required placeholder="Input your Email" />
    <input name='password' type="password" minlength="6" required placeholder='Input your Password' />
    <input name='password_confirmation' minlength="6" type="password" required placeholder="Confirm your Email" />

    <input type="submit" name="submit" />
</form>

@endsection
