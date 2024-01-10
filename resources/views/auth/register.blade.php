
@extends('layouts.app-master')
@section('content')
            <!-- App Features -->
            <header class="site-header d-flex flex-column justify-content-center align-items-center" style="min-height:800px">
   
             
            <section id="tmAppFeatures" >


                <div class="row">
                    <header class="col-12 text-center text-white tm-bg-black-transparent p-1 tm-app-header">
                        <h2 class="text-uppercase mb-3" style="font-family:'Tajawal'; font-size: 18px ;">تسجيل مستخدم
                            جديد</h2>
                        <div class=" container-fluid content">
                            <div class="parallax-window ">
                                <div class="row justify-content-center">
                                    <form method="post" action="{{ route('register.perform') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />



                                        <div class="form-group form-floating mb-3 row">
                                            <input type="email" class="form-control" name="email"
                                                value="{{ old('email') }}" placeholder="name@example.com"
                                                required    pattern="[^@\s]+@[^@\s]+" autofocus>
                                            <label for="floatingEmail">Email address</label>
                                            @if ($errors->has('email'))
                                                <span
                                                    class="text-danger text-left">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group form-floating mb-3 row" >
                                            <input type="text" class="form-control" name="username"
                                                value="{{ old('username') }}" placeholder="Username"
                                                required="required" autofocus>
                                            <label for="floatingName">Username</label>
                                            @if ($errors->has('username'))
                                                <span
                                                    class="text-danger text-left">{{ $errors->first('username') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group form-floating mb-3 row">
                                            <input type="password" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="Password"
                                                required="required">
                                            <label for="floatingPassword">Password</label>
                                            @if ($errors->has('password'))
                                                <span
                                                    class="text-danger text-left">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group form-floating mb-3 row">
                                            <input type="password" class="form-control" name="password_confirmation"
                                                value="{{ old('password_confirmation') }}"
                                                placeholder="Confirm Password" required="required">
                                            <label for="floatingConfirmPassword">Confirm Password</label>
                                            @if ($errors->has('password_confirmation'))
                                                <span
                                                    class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                        </div>

                                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

                                        {{-- @include('auth.partials.copy') --}}
                                    </form>
                                </div>
                            </div>
                    </header>
                </div>


            </section>
               
        </header>
        @endsection

