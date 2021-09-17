@extends('layouts.app')
@section('title', 'Login')
@section('app_content')

    <section class="login-box">
        <div class="login-item-2">
            @include('partials.errors')
        </div>


        <div class="login-item py-5 px-3">

            <section class="my-4">
                <h2>Join </h2>
                <p>Inventory X</p>
            </section>



            <form action="{{ route('auth.register') }}" method="POST">
                @csrf

                <div class="form-floating my-1">
                    <input name='name' class="form-control" id="floatingName" required type="text" minlength="6"
                        placeholder='Full Name' />
                    <label for="floatingName">Full Name</label>
                </div>

                <div class="form-floating my-1">
                    <input name='email' class="form-control" id="floatingEmail" type="email" minlength="6" required
                        placeholder='Input your Email' />
                    <label for="floatingEmail">Email</label>
                </div>

                <div class="form-floating my-1">
                    <input name='password' class="form-control" id="floatingPassword" type="password" minlength="6"
                        required placeholder='Input your Password' />
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating my-1">
                    <input name='password_confirmation' class="form-control" id="floatingPassword2" type="password" minlength="6"
                        required placeholder='Confirm Password' />
                    <label for="floatingPassword2">Confirm Password</label>
                </div>

                <div class="d-grid my-3">
                    <button type="submit" class="btn btn-primary">Create an Account</button>
                    <a class="text-center my-2" href="/login">I have an account</a>
                </div>
            </form>

        </div>


        <div class="login-item-2"></div>


    </section>
 

@endsection
