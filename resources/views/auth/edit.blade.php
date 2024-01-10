<nav
    style=" 
background-image: url('../images/templatemo-wave-header.jpg'), linear-gradient(#348CD2, #FFFFFF);
padding-top: 80px;  ">
    @extends('layouts.app-master')
</nav>
@section('content')
    <!-- App Features -->
    <section id="tmAppFeatures" style="margin-bottom: 70px; margin-top: 10%">
        <div class="row">
            <header class="col-12 text-center text-white tm-bg-black-transparent p-1 tm-app-header">
                <h2 class="text-uppercase mb-3" style="font-family:'Tajawal'; font-size: 18px ;">لتغيير كلمة المرور اكتب كلمة
                    مرور جديدة</h2>
                <div class=" container-fluid content">
                    <div class="parallax-window ">
                        <div class="row justify-content-center">

                            <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8"
                                action="{{ route('edit.update', $edit->id)}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                          
                         <div class="form-group form-floating mb-3 row">
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $edit->email }}" placeholder="name@example.com"
                                          >
                                    <label for="floatingEmail">Email address</label>
                                  
                                </div>

                                      {{--  <div class="form-group form-floating mb-3 row" >
                                    <input type="text" class="form-control" name="username"
                                        value="{{$edit->username}}" placeholder="Username"
                                        required="required" >
                                    <label for="floatingName">Username</label>
                                
                                </div> --}}

                                <div class="form-group form-floating mb-3 row">
                                    <input type="password" class="form-control" name="password"
                                        value="{{$edit->password}}" placeholder="Password"
                                        required="required">
                                    <label for="floatingPassword">Password</label>
                                
                                </div>

                                {{-- <div class="form-group form-floating mb-3 row">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        value="{{ old('password_confirmation') }}"
                                        placeholder="Confirm Password" required="required">
                                    <label for="floatingConfirmPassword">Confirm Password</label>
                                 
                                </div> --}}




                                <button class="w-100 btn btn-lg btn-primary" type="submit">Eidt</button>


                            </form>
                        </div>
                    </div>
            </header>
        </div>


    </section>

    <style>
        .battondelet {
            /* transparent */
            background: transparent;
            border-radius: 5px;
            font-family: Tajawal;
            width: 140px;
            color: #f2f2f2;
        }

        .battondelet:hover {
            background-color: #447dee;
            color: #f2f2f2
        }

        .conty {
            background: url('/img/bg-01.jpg') center center /cover;
            background-attachment: fixed;

        }

        table tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        .content {
            width: 90%;
        }

        .ondeinpt {
            flex: 1
        }

        .containerspu {
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 2px;
            text-transform: uppercase;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .textconten {
            color: #f2f2f2;
            text-align: center;
            border-radius: 7px;
            padding-left: 2px;
            padding-right: 2px;
        }

        span {
            padding-top: 3px;
            padding-bottom: 0px;
            font-family: 'Tajawal';
        }

        .inputcontn {
            margin: 10px;
        }

        .inputcontnchekbox {
            margin: 10px;
            border-radius: 7px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .checkten {
            padding: 10px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: row-reverse;
        }

        input {
            width: 80%;
            margin-bottom: 5px;
            border-radius: 7px;
            padding-left: 2px;
            padding-right: 2px;
            text-align: center;
            font-size: small;
            width: 75%;
        }

        .pate {
            width: 45%;
        }

        .battondelet {
            /* transparent */
            background: transparent;
            border-radius: 5px;
            font-family: Tajawal;
            width: 140px;
            color: #f2f2f2;
        }

        .battondelet:hover {
            background-color: #447dee;
            color: #f2f2f2
        }

        .batton {
            /* transparent */
            background: transparent;
            border-radius: 5px;
            font-family: Tajawal;
            width: 100px;
            color: #f2f2f2;
        }

        .batton:hover {
            background-color: #447dee;
            color: #f2f2f2
        }
    </style>
@endsection
