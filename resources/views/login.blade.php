@extends('layouts.app')
@section('title', 'Login')
@section('app_content')


<section class="login-box">
    <div class="login-item-2">

        @if ($errors->any())
            <div class="alert alert-danger my-2">
                @foreach ($errors->all() as $error)
                    <span style="display: block; font-size:13px">{{ $error }}</span>
                @endforeach
            </div>
        @endif
    </div>


    <div class="login-item py-5 px-3" style="background:red; border-radius:10px">

        <section class="my-4">
            <h2>Sign In </h2>
            <p>Inventory I</p>
        </section>



        <form action="{{ route('auth.login') }}" method="POST">
            @csrf

            <div class="form-floating mb-3">
                <input name='email' class="form-control" id="floatingInput" type="email" value="{{ old('email') }}"
                    required placeholder="Input your Email" />
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name='password' class="form-control" id="floatingInput" type="password" minlength="6" required
                    placeholder='Input your Password' />
                <label for="floatingPassword">Password</label>
            </div>

            <div class="d-grid my-3">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>

    </div>


    <div class="login-item-2"></div>


</section>

@endsection
