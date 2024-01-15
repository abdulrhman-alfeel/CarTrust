<!doctype html>
<html lang="en">

<head>
    <meta name=”4uprint”>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#348CD2" />
    <meta charset="UTF-8" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CarTrust</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="apple-touch-icon" href="{{ asset('maskable_icon_x192.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('maskable_icon_x128.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('maskable_icon_x96.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('css/tooplate-infinit-loop.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css' />

    {{-- <link rel="icon" href="/favicon.ico" /> --}}
    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    {{-- <link href="{{url('css/app.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">   --}}

    {{-- <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>
    @include('layouts.partials.navbar')
    <div class="parallax-window" style="overflow: hidden">
        @yield('content')
    </div>
    <!-- <footer class="site-footer"> 
    </footer> -->
        <!-- Contact -->
        <section id="contact" class=" tm-section-pad-top tm-parallax-2">
      <!-- class="container" -->
      <div class=' tm-section-pad-top-footer' 
      style="
      width: 95%;
      
      " >
        <div class="row ml-5   justify-content-between"  style="
        width: 100%;
        position: relative;
         /* border: solid 10px #000; */
        left: 100px;
        ">
            <div class="col-sm-12 col-md-3 ">
                <div class="contact-item">                         
                </div>            
                <div class="contact-item">
                  <a rel="nofollow" href="https://www.tooplate.com/contact" 
                  class="item-link"
                  style="justify-content: right;"
                  >
                    <span class="mb-3 text-right" >اشترك في النشرة الإخبارية</span>
                </a> 
                  <div class="input-group mb-0">
                    <span class="input-group-text" id="basic-addon1" style="background-color: #2d3291;">
                      <i class="fi fi-rr-angle-small-left" style="
                        color:#ffffff;
                        "></i>

                    </span>
                    <input type="text" class="form-control text-right" placeholder="البريد الألكتروني" aria-label="Username" aria-describedby="basic-addon1">
                  </div>ٍ
                  
                  <a rel="nofollow" href="#section_3" class="item-link"
                   style="
                   position: relative;
                   right: 70px;">
                      <img src="images/evaluation.png" style="width: 130%;">
                  </a>              
                </div>
        
            </div>
            <div class="col-sm-12 col-md-2 ">
                <div class="contact-item">
                  <a rel="nofollow" href="https://www.tooplate.com/contact" class="item-link">
                      <span class="mb-0 ml-5">حمل التطبيق</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="mailto:mail@company.com" class="item-link">
                      <img src="images/appstore-footer.png" width="100%">
                  </a> 
                  <a rel="nofollow" href="https://www.google.com/maps" class="item-link mt-2">
                    <img src="images/googleplay-footer.png" width="100%">
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="tel:0100200340" class="item-link ">
                    <div class="row ">
                      <span class="mb-0 ">: الرقم الضريبي</span>
                      <span class="mb-0 ml-3">255-662-5566</span>
                    </div>
                    <img src="images/cost.png" width="40%">
                  </a>              
                </div>
                <div class="contact-item">&nbsp;</div>
            
            </div>


            <div class="col-sm-12 col-md-2 ml-2">
              <div class="contact-item ">
                <a rel="nofollow" href="https://www.tooplate.com/contact" class="item-link ml-5">
                    <span class="mb-0 ml-4">مصادر</span>
                </a>              
              </div>
              
              <div class="contact-item">
                <a rel="nofollow" href="mailto:mail@company.com" class="item-link">
                    <span class="mb-0 ml-4">ملف الشركة</span>
                </a>              
              </div>
              
              <div class="contact-item">
                <a rel="nofollow" href="https://www.google.com/maps" class="item-link ">
                    <span class="mb-0 ml-4">تواصل معنا</span>
                </a>              
              </div>
          
              <div class="contact-item">
                <a rel="nofollow" href="tel:0100200340" class="item-link ">
                    <span class="mb-0 ml-5">الوظائف</span>
                </a>              
              </div>
              <div class="contact-item">
                <a rel="nofollow" href="tel:0100200340" class="item-link ">
                    <span class="mb-0 ml-2">خدمة العملاء</span>
                </a>              
              </div>
              <div class="contact-item">&nbsp;</div>
          
          </div>
            <div class="col-sm-12 col-md-2 ml-2">
              <div class="contact-item ">
                <a rel="nofollow" href="https://www.tooplate.com/contact" class="item-link ml-3">
                    <span class="mb-0 ml-5">لمحة عامة</span>
                </a>              
              </div>
              
              <div class="contact-item">
                <a rel="nofollow" href="mailto:mail@company.com" class="item-link ml-5">
                    <span class="mb-0 ml-4">من نحن </span>
                </a>              
              </div>
              
              <div class="contact-item">
                <a rel="nofollow" href="https://www.google.com/maps" class="item-link ">
                    <span class="mb-0 ml-3">الاسئلة المتكررة</span>
                </a>              
              </div>
          
              <div class="contact-item">
                <a rel="nofollow" href="tel:0100200340" class="item-link ">
                    <span class="mb-0 ">سياسة الخصوصية</span>
                </a>              
              </div>
              <div class="contact-item">
                <a rel="nofollow" href="tel:0100200340" class="item-link ">
                    <span class="mb-0 ml-2">الشروط والأحكام</span>
                </a>              
              </div>
              <div class="contact-item">&nbsp;</div>
          
          </div>
          
            <div class="col-sm-12 col-md-2 ml-2 ">
                <div class="contact-item ">
                  <a rel="nofollow" href="https://www.tooplate.com/contact" class="item-link">
                      <span class="mb-0 ml-4">حول كارترست</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="mailto:mail@company.com" class="item-link">
                      <span class="mb-0 ml-2">لماذا كار ترست</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="https://www.google.com/maps" class="item-link ml-5">
                      <span class="mb-0 ml-4">قصتنا</span>
                  </a>              
                </div>
            
                <div class="contact-item">
                  <a rel="nofollow" href="tel:0100200340" class="item-link ml-5">
                      <span class="mb-0 ml-4">شركائنا</span>
                  </a>              
                </div>
                <div class="contact-item">
                  <a rel="nofollow" href="tel:0100200340" class="item-link ml-4">
                      <span class="mb-0 ml-5">عملائنا</span>
                  </a>              
                </div>
                <div class="contact-item">&nbsp;</div>
            
            </div>
            
      
            
            
        </div><!-- row ending -->
        
      </div>

   
      	<footer  
         class="
         text-center 
         small 
         tm-footer
         d-flex
         justify-content-between
         "
         style="
         margin-top: 15px;

         "
         >
          <hr  style=" background-color: #6a6868;"/>
          <div class="row g-3 justify-content-between ">
            
         <div class="row g-3  d-flex
         justify-content-between " >
         
         <h6  
        style=" margin: 5;
        font-size: 20px;
        font-family: 'Tajawal';
        color: #6a6868;
        " >حسابات التواصل الاجتماعي</h6>
            <div class="mb-5  ml-5" style="
            display: flex;justify-content: center; flex-direction: row-reverse;
            ">
                <a style="width: 50px;">
                <img src="images/youtub.png" style="width: 100%">
                </a>
                <a style="width: 50px;">
                <img src="images/tiktok.png" style="width: 100%">
                </a>
                <a style="width: 50px;">
                <img src="images/x.png"style="width: 100%">
                </a>
                <a style="width: 50px;">
                <img src="images/instgram.png"style="width: 100%">
                </a>
                <a style="width: 50px;"> 
                <img src="images/feacbook.png"style="width: 100%">
                </a>
            </div>
    
      </div>
    </div>

    <img src="images/logo.png" width="10%" height="10%" style="margin-right: 40px;">

        </footer>

    </section>
    
    <!-- Page footer -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    {{-- <script src="../js/app.js"></script> --}}
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.min.js') }}"defer></script>
    <script src="{{ asset('/js/parallax.min.js') }}"defer></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"defer></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"defer></script>
    <script src="{{ asset('/js/custom.js') }}"defer></script>
    <script src="{{ asset('/js/print.js') }}"defer></script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
</body>

</html>
