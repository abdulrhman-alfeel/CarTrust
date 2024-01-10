@extends('layouts.auth-master')

@if (session()->has('message'))
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
    </svg>
    <div class=" alert-success d-flex align-items-center " role="alert">
        <svg class="bi flex-shrink-0 m-auto" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div class="container p-x text-center">
            <h6 class="p-y" style="color:black; font-size:15px; font-family:Tajawal; margin:5px">
                {{ session()->get('message') }}</h6>
        </div>
    </div>
@endif
@section('content')
    <div class="postssing" id="exampleModal">
        <a id='href'>
            <div
                style="padding:2px 0 0 2px; flex-direction:row-reverse; display:flex;justify-content:center;align-items:center">
                <div style="flex:10%;margin:5px">
                    <div
                        style="overflow:hidden; width:60px;height:60px;margin:auto; border-radius:50%; background-color: rgb(255, 255, 255); ">
                        <img style="object-fit:cover; width:60px;height:60px" src="{{ url('images/iconuser.png') }}"
                            alt="">
                    </div>
                </div>
                <div id="inputs"
                    style="flex:80%; background-color: rgb(255, 255, 255); padding:15px; margin:auto; border-radius:10px; text-align:center">
                    <a id='Authuser' style="margin:auto;  font-family:Tajawal;  text-align:center;font-size:12px;">
                        <span>هل لديك اعمال جديدة </span>
                    </a>
                    <a href="{{ route('login.perform') }}" id='Authuserandg'
                        style="color:crimson; margin:auto; display: none; font-family:Tajawal;  text-align:center;font-size:16px;">
                        <span> يجب تسجيل دخول المستخدم اولاً</span>
                    </a>
                </div>
            </div>
            <div
                style="margin:5px;padding:1px;border-radius:5px; text-align:center; width:100px; font-family:'Tajawal' ;color:aliceblue; font-size:12px; background:#3a86ff">
                <a>نشر</a>
            </div>
        </a>
    </div>

    <section class="topics-section  pb-5 ">
        <div style="display:none; width:100%; position:fixed; top:0; z-index: 999 ;" id="exampleModals">
            <div tabindex="-1">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">4uPrint</h5>
                            <div class="btn-close" id="conteinermodle">
                                <i class="bi bi-x-lg"></i>
                            </div>
                        </div>
                        {{-- <div class="modal-body" id='formpost'> </div> --}}
                        <div>
                            <form action="{{ route('print.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input class='form-control text-center' placeholder="ادخل العنوان" name='title'
                                    id="title">
                                <textarea class="form-control text-center" name='description' id="exampleFormControlTextarea1" rows="3"
                                    placeholder="اكتب الوصف المناسب" pattern="^{3,16}$" required="true"></textarea>
                                <div class="flex items-center justify-center w-full"
                                    style="width:70%;overflow:hidden; margin:auto">
                                    <div for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg aria-hidden="true" style=" height:100px; margin:auto;width:80%"
                                                class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                (MAX. 800x400px)</p>
                                            <p id="size"></p>
                                        </div>
                                        <input id="file" name='image_path' type="file" class="hidden"
                                            onchange="Filevalidation()" required>

                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                            role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 0%"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            id="conteinermodleclos">Close</button>
                                        <button type='submit' id="example"
                                            class="btn btn-primary buttonprint">نشر</button>
                                    </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="topics-section  pb-5 ">
        <div class="continbody" id='looding' style="display: none">
            <h5 class="text-center text-white" style="font-family: tajawal;margin-top:200px">نرجو الانتظار إلى ان يتم نشر
                المنشور</h5>
            <div id="loop" class="center"></div>
            <div id="bike-wrapper" class="center">
                <div id="bike" class="centerBike"></div>
            </div>
        </div>
    </section>

    <section class="topics-section  " style="margin-bottom: 150px;">
        <div style="display:flex;  flex-direction:column-reverse;">
            @foreach ($posts as $post)
                <div class="card post"
                    style="border-radius:.5rem;box-shadow:.2rem 0 .2rem rgba(0, 0, 0, 0.127);  margin: auto;margin-bottom: 30px;">
                    <div style="height:80%; overflow:hidden ">
                        <img style="height:120%; width:100%"
                            src="{{ url('images/imageprintpost') }}/{{ $post->image_path }}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body " style="text-align: right;">
                        <h5 class="text-gray-700 font-bold text-4xl  md:pt-0">{{ $post->title }}</h5>
                        <div style="display:flex; flex-direction:column-reverse; align-items:flex-end">
                            <div style="display:flex;">
                                <span style="font-size:15px">{{ $post->user->username }} </span> :الناشر
                            </div>
                            <div style="display:flex;">
                                <span class="text-gray-500 italic"
                                    style="font-size:12px">{{ date('d-m-y', $post->update_at) }}</span>
                            </div>
                        </div>
                        <p class="text-l text-gray-700 py-8 leading-6">{{ $post->description }}</p>
                        <a href="{{ route('print.show', $post->slug) }}" class="btn btn-primary"
                            aria-label="Read more about{{ $post->title }}">رؤية المزيد</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <script>
        var exampleModal = document.getElementById('exampleModal')
        var inputs = document.getElementById('inputs')
        var Authuser = document.getElementById('Authuser')
        var Authuserandg = document.getElementById('Authuserandg')
        var exampleModals = document.getElementById('exampleModals')
        var looding = document.getElementById('looding')

        exampleModal.addEventListener('click', function(event) {
            if ("{{ Auth::user() }}") {
                exampleModals.style.display = "block";
                exampleModals.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
                exampleModals.style.height = "100%";
            } else {
                Authuserandg.style.display = 'block';
                Authuser.style.display = 'none';
                //     let x = document.createElement('a');
                //     let textTolink = document.createTextNode("يجب تسجيل دخول المستخدم اولاً");
                //    if(Authuser !== textTolink ){
                //     x.appendChild(textTolink);
                //     x.href ="{{ route('login.perform') }}";
                //     inputs.appendChild(x);
                //    }
            }

        })
        // var conteinermodle = document.querySelector(".conteinermodle")
        var conteinermodleclos = document.getElementById("conteinermodleclos")
        conteinermodleclos.addEventListener('click', function(event) {
            exampleModals.style.display = "none";
        })
        var conteinermodle = document.getElementById("conteinermodle")
        conteinermodle.addEventListener('click', function(event) {
            exampleModals.style.display = "none";
        })
        const fi = document.querySelector('.hidden');
        const buttonprint = document.querySelector('.buttonprint');
        buttonprint.addEventListener('click', function() {
            if (fi.files.length > 0) {
                exampleModals.style.display = 'none';
                looding.style.display = "block"
            }

        })
    </script>
    <style>
        .continbody {
            width: 100%;
            height: 100%;
            z-index: 999;
            position: fixed;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        .centerBike {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: 26px;
            margin-left: -12px;
        }

        .center {
            position: absolute;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -50px;
        }

        #loop {
            height: 100px;
            width: 100px;
            border: #bb5f27 solid 4px;
            border-radius: 200px;
        }

        #loop:before {
            background: linear-gradient(to left, rgba(187, 95, 39, 0) 0%, rgba(187, 95, 39, 1) 30%, rgba(187, 95, 39, 1)70%, rgba(187, 95, 39, 0)100%);
            content: '';
            display: block;
            height: 4px;
            position: relative;
            left: -100px;
            top: 100px;
            width: 300px;
        }

        #bike-wrapper {
            height: 108px;
            width: 108px;
            animation: drive 3s linear infinite;
        }

        #bike {
            height: 24px;
            width: 25px;
            /* background-image:url("https://s3-us-west-2-amazonaws.com/s.cdpn.io/133687/motorbike.png"); */
            background-image: url("/images/Arw.png");
        }

        @keyframes drive {
            0% {
                margin-left: -364px;
                opacity: 0;
            }

            33.33% {
                transform: rotate(0deg);
                margin-left: -50px;
                opacity: 1;
            }

            66.66% {
                transform: rotate(-360deg);
                margin-left: -50px;
                opacity: 1;
            }

            100% {
                margin-left: 264px;
                transform: rotate(-360deg);
                opacity: 0;
            }
        }
    </style>
@endsection
