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
    <section class="topics-section" style="display: none;width:100%; position:fixed; top:0; z-index: 999 ;" id="exModals">
        <div tabindex="-1">
            <div tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div style="text-align:center">
                            <h5 class="modal-title" style="font-family:Tajawal;">هل انت تريد حذف المنشور </h5>
                        </div>
                        <div class="text-center row " style="margin: auto">
                            <form action="{{ route('print.destroy', $post->slug) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-800" style=" border:#FFFFFF ">
                                    <a class="btn btn-primary text-white">نعم</a>
                                </button>
                                <button type="button" class="btn btn-secondary" id="conteinerr">لالست متأكد</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="topics-section " style="display: none;width:100%; position:fixed; top:0; z-index: 999 ;"
        id="exampleModalsfg">
        <div tabindex="-1">
            <div tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">4uPrint</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('print.update', $post->slug) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input class='form-control text-center' value="{{ $post->title }}" name='title'
                                    id="title">
                                <textarea class="form-control text-center" name='description' id="exampleFormControlTextarea1" rows="3"
                                    pattern="^{3,16}$" required="true">
                                    {{ $post->description }}
                                </textarea>
                                {{-- <input  name='formfilesm' id="formFileSm" type="file" placeholder="اختر صورة" >             --}}
                                <div class="flex items-center justify-center w-full"
                                    style="width:70%;overflow:hidden; margin:auto">
                                    <label for="dropzone-file"
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
                                        </div>
                                        <input id="file" name='image_path' type="file" class="hidden"
                                            onchange="Filevalidation()" />
                                    </label>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="conteinermodle">Close</button>
                                        <button type='submit'  id="example"
                                            class="btn btn-primary buttonprint">نشر</button>
                                    </div>
                            </form>
                            <p id="size"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="topics-section" style="margin-bottom: 150px; margin-top:50px">
        <div class=" postshow" style="border-radius:.5rem;   margin:auto;margin-bottom: 30px;">
            <div class="imagconte">
                <img src="{{url('imageprintpost')}}/{{ $post->image_path }}" class="card-img-top" alt="...">
            </div>
            <div class='textpost'>
                <div class="card-body " style="text-align: right; ">
                    <h4 class="card-title" style="font-family:'Tajawal'">{{ $post->title }}</h4>
                    <div class='datanam'>
                        <span>
                            {{ $post->user->username }} :الناشر
                        </span>
                        <span>
                            {{ date('d-m-y', $post->update_at) }}:الوقت
                        </span>
                    </div>
                    <div style="border: #348CD2 5px 5px solid ; margin:20px">
                        <span style="font-weight: bold;  border:solid 5px block;font-family:'Tajawal'"
                            class="card-text direc">{{ $post->description }}</span>
                    </div>
                    @if (Auth::user() && Auth::user()->id == $post->user_id)
                        <div class="row " style="display:flex; justify-content:space-evenly; align-self:baseline ">
                            <h6 id="exampleModaldfg">
                                <a class="btn btn-primary text-white" style="font-family:'Tajawal'">تعديل</a>
                            </h6>
                            <div id='exModal'>
                                <h6 class="btn  text-white" style="background: red; font-family:'Tajawal'"> حذف</h6>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <script>
        var exampleModaldfg = document.getElementById('exampleModaldfg');
        var exampleModalsfg = document.getElementById('exampleModalsfg');
        exampleModaldfg.addEventListener('click', function(event) {
            exampleModals.style.display = "block";
            exampleModalsfg.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
        })
        // var conteinermodle = document.querySelector(".conteinermodle")
        var conteinermodle = document.getElementById("conteinermodle")
        conteinermodle.addEventListener('click', function(event) {
            exampleModalsfg.style.display = "none";
        });
        var exModal = document.getElementById('exModal');
        var exModals = document.getElementById('exModals');
        exModal.addEventListener('click', function(event) {
            exModals.style.display = "block";
            exModals.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
        })
        // var conteinermodle = document.querySelector(".conteinermodle")
        var conteinermodle = document.getElementById("conteinerr")
        conteinermodle.addEventListener('click', function(event) {
            exModals.style.display = "none";
        })
    </script>
    <script>
        Filevalidation = () => {
            const fi = document.getElementById('file');
            // console.log(fi.files.length);
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
                    const fsize = fi.files.item(i).size;
                    const file = Math.round(fsize / 1024);
                    if (file >= 4096) {
                        alert(
                            "File too Big, please select a file less than 4mb");
                        // hjt=`<div > hlow wordl</div>`;
                        // document.getElementById('size').innerHTML= hjt;
                        document.getElementById('example').style.display = "none";
                    } else {
                        document.getElementById('example').style.display = "block";
                        // document.getElementById('size').innerHTML = '<b>' +
                        //     file + '</b> KB';
                    }
                }
            }
        }
        // document.getElementById('size').innerHTML= hjt;
    </script>
@endsection
