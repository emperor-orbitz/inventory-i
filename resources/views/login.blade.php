@extends('layouts.app')
@section('title', 'Login')
@section('app_content')

<h2>Loagin Page</h2> 

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<form action="{{route('auth.login.post')}}" method="POST">
    @csrf
    <input name='email' type="email" value="{{old('email')}}" required placeholder="Input your Email" />
    <input name='password' type="password" minlength="6" required placeholder='Input your Password' />

    <input type="submit" name="submit"/>
</form>

@endsection
