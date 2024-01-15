@extends('layouts.app-master')
@section('content')
    <section id="infinite" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
    
      <div >
        <button type="button" class="btn btn-primary btn-lg 
        col-md-4 p-4 position-absolute" style="
        
        width: 350px;
        top: 60%; 
        right: 63%; z-index: 999;
        font-family: 'Tajawal';
        font-size: larger;
        background-color: #2d3291;
        ">
        ابدأ خدمة التقييم الآن</button>
        <!-- Full-width images with number and caption text -->
        <div class="slide-container">
          <div class="slide">
              <!-- <h1 class="slide_h1">Slide 1</h1>
              <p class="slide_p">Description for slide 1</p> -->
    
              <img  class="imge_style" src="images/care_one.png">
          </div>
          <div class="slide">
              <!-- <p class="slide_p"
              
              style="
              position: relative;
              top: 40px;"
              >Description for slide 2</p> -->
              <img class="imge_style" src="images/care_one_1.png">
          </div>
          <div class="slide">
              <!-- <p class="slide_p" >Description for slide 3</p> -->
              <img class="imge_style"  src="images/care_one_2.png">
          </div>
          <!-- <div class="slide">
              <h1 class="slide_h1">Slide 4</h1>
              <p class="slide_p">Description for slide 3</p>
              <img class="imge_style" src="images/infinite-loop-02-mobile.jpg">
          </div> -->
      </div>
      <div class="tm-next tm-intro-next col-sm-12  ">
        <a onclick="changeSlide()" class=" text-center tm-down-arrow-link">
          <i class="fi fi-rr-arrow-small-left tm-down-arrow" ></i>
        </a>
        <a onclick="changeSlide()" class="text-center tm-down-arrow-link">
          <i class="fi fi-rr-arrow-small-right tm-down-arrow"></i>
        </a>
      </div>


    </section>

      <!-- tm-next tm-intro-next -->
      <div class=" col-sm-12 evaluation ">
        <form action="{{ route('contact.store') }}" 
        method="POST" 
        enctype="application/json" 
        class="evaluation_sub"
        >
                @csrf
                <div class='evaluation_sub_one'>
                <span>car Brand</span>
                <select class="form-control text-center selecter "  id="floatingSelect" name="servicng"
                    aria-label="Floating label select example">
                    <option>
                        <i class="fas fa-dog"></i> BMW 
                    </option>
                </select>
                </div>
                <label class='evaluation_sub_one'>
                <span>car Model</span>
                <select class="form-control text-center selecter "  id="floatingSelect" name="servicng"
                    aria-label="Floating label select example">
                    <option>car model </option>
                </select>
                </label>
                <div class='evaluation_sub_one'>
                <span>car Year</span>
                <select class="form-control text-center selecter "  id="floatingSelect" name="servicng"
                    aria-label="Floating label select example">
                    <option>car Year </option>
                </select>
                </div>
                <!-- button sent evaluation -->
                    <button type='submit' id="winner" class="btn  d-flex text_buttom">
                      قيم سياراتك 
                        <i class="fi fi-rr-arrow-small-right arrow_button"></i></button>
            </form>
      </div>

      <section id="whatwedo" class="tm-section-pad-top">
      <div class="container">
        <h2 class="tm-text-primary text-center tm-section-title mb-4" style="font-family:'Tajawal', sans-serif; color:#2d3291;">شركائنا</h2>
        <div class="owl-carousel owl-theme container " style="display: flex;justify-content:space-between;align-items: center;"  id="owscrol">
        </div>
        </div>
    </section>


    <section id="gallery" class="tm-section-pad-top mb-5" 
    style="background-color: #f4fbfd;
    ">
      <div class="container tm-container-gallery" 
      style="display: flex;
      flex-direction:row-reverse;
      justify-content: space-between;   
      ">
        <div class="row">
          <div class="text-right col-12">
            <p class="tm-text-primary tm-section-title_sub mb-4 " >افضل الخدمات</p>
              <h2 class="tm-text-primary tm-section-title mb-4" style="color: #000;"> احصل على تجربة فريدة <br/>ومذهلة مع <span style="color: #2d3291;"> خدمات</span><span style="color: #21add9"> كارترست</span> </h2>       
             <ul>
                <a style="
                  display: flex;
                  flex-direction: row-reverse;
                  justify-content: flex-start; ">
                <div style="
                width: 27%; background-color: #fff;
                 border-radius: 15px;
                 padding: 15px;
                 box-shadow: 0 4px 20px rgba(0,0,0,0.3);
                 text-align: center;                
                 margin: 10px;
                 ">
                <img src="images/car_icon.png" style="width: 80%;">
                </div>
              <div style="display: grid;align-items: center;margin: 10px;">
                <h5 
                  style="
                  font-family: 'Tajawal', sans-serif;
                  color: black;"
                  >تقييم السيارات</h5>
                  <h5 
                  style="
                  font-family: 'Tajawal', sans-serif;
                  color: rgb(157, 156, 156);"
                  >هذا النص هو مثال لنص  يمكن ان يستبدل في نفس المساحة،لقد تم توليد هذا النص.</h5>
                </div>
                </a>
                <a style="
                  display: flex;
                  flex-direction: row-reverse;
                  justify-content: flex-start; ">
                <div style="width: 27%; background-color: #fff;
                 border-radius: 15px;
                 padding: 15px;
                 box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
                 text-align: center;
                 margin: 10px;
                 ">
                  <img src="images/car_icon_1.png" style="width: 80%;">
                </div>
              <div style="display: grid;align-items: center;margin: 10px;">
                <h5 
                  style="
                  font-family: 'Tajawal', sans-serif;
                  color: black;"
                  >فحص المركبات</h5>
                  <h5 
                  style="
                  font-family: 'Tajawal', sans-serif;
                  color: rgb(157, 156, 156);"
                  >هذا النص هو مثال لنص  يمكن ان يستبدل في نفس المساحة،لقد تم توليد هذا النص.</h5>
                </div>
                </a>
                <a style="
                  display: flex;
                  flex-direction: row-reverse;
                  justify-content: flex-start; ">
                <div style="width: 27%; background-color: #fff;
                 border-radius: 15px;
                 padding: 15px;
                 box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
                 text-align: center;
                 margin: 10px;
                 ">
                  <img src="images/car_icon_2.png" style="width: 80%;">
                </div>
              <div style="display: grid;align-items: center;margin: 10px;">
                <h5 
                  style="
                  font-family: 'Tajawal', sans-serif;
                  color: black;"
                  >الضمان الذهبي</h5>
                  <h5 
                  style="
                  font-family: 'Tajawal', sans-serif;
                  color: rgb(157, 156, 156);"
                  >هذا النص هو مثال لنص  يمكن ان يستبدل في نفس المساحة،لقد تم توليد هذا النص.</h5>
                </div>
                </a>
             </ul>
          </div>            
        </div>
        <img src="images/cars_tow.png" style="width: 50%;position: relative;right: 15%;">
      </div>
    </section>


    <section class="topics-section section-padding pb-0" id="section_3" 
    style="
    margin-top: 95px;
    margin-bottom: 95px;
    ">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-12">
                <h2 class="tm-text-primary tm-section-title mb-4 text-center pb-0" style="color: #2d3291;">كيف تحصل على خدمتك</h2>
                <p class="mx-auto tm-section-desc " >
                 هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة لقد تم توليد هذا النص من مولد النص العربي،حيث يمكنك ان تولد مثل هذا النص او العديد من النصوص الاخرى إضافة إلى زيادة عدد الحروف التي يولدها التطبيق
                </p>
              </div>
            
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-overlay " >
                    <div 
                    style="                   
                    width:50%;
                    background-color: #fff;
                    border-radius: 25px;
                    padding: 15px;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
                    text-align: center;                
                    margin: 10px;
                    overflow: hidden;
                    margin: auto;
                    margin-bottom: 10px;
                    "
                    >
                     <a 
                     class="custom-block-image-wrap">
                     <i class=
                     "fi fi-rr-shield-plus"                     
                     style="font-size: 70px; color:#21add9"></i>
                   
                     <!-- <img src="images/car_icon.png" style="object-fit: cover;width: 70%;"> -->
                    </a>
                </div>
                    <div class="custom-block-info custom-block-overlay-info" style="text-align:right">
                        <h5 class="mb-1" style="text-align: center;">
                            <a href="#" style="font-family: 'Tajawal',sans-serif;">
                                حمل التقرير
                            </a>
                        </h5>
                        <p class="mx-auto tm-section-desc text-center">هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة لقد تم توليد هذا النص</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
              <div class="custom-block custom-block-overlay " >
                  <div 
                  style="                   
                  width:50%;
                  background-color: #2d3291;
                  border-radius: 25px;
                  padding: 15px;
                  box-shadow: 0 4px 15px rgba(0,0,0,0.3);
                  text-align: center;                
                  margin: 10px;
                  overflow: hidden;
                  margin: auto;
                  margin-bottom: 10px;
                  "
                  >
                   <a 
                   class="custom-block-image-wrap">
                
                    <i class="fi fi-rr-completed" style="font-size: 70px;color:#ffffff"></i>
                    
                   <!-- <img src="images/car_icon.png" style="object-fit: cover;width: 70%;"> -->
                  </a>
                  
              </div>
                  <div class="custom-block-info custom-block-overlay-info" style="text-align:right">
                      <h5 class="mb-1" style="text-align: center;">
                          <a href="#" style="font-family: 'Tajawal',sans-serif;">
                              اكمل الدفع
                          </a>
                      </h5>
                      <p class="mx-auto tm-section-desc text-center">هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة لقد تم توليد هذا النص</p>
                  </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
              <div class="custom-block custom-block-overlay " >
                  <div 
                  style="                   
                  width:50%;
                  background-color: #fff;
                  border-radius: 25px;
                  padding: 15px;
                  box-shadow: 0 4px 15px rgba(0,0,0,0.3);
                  text-align: center;                
                  overflow: hidden;
                  margin: auto;
                  margin-bottom: 10px;
                  "
                  >
                   <a 
                   class="custom-block-image-wrap">
                   <i class=
                   "fi fi-rr-treatment"
                    style="font-size: 70px;color:#21add9"></i>
                   <!-- <img src="images/car_icon.png" style="object-fit: cover;width: 70%;"> -->
                  </a>
                  
              </div>
                  <div class="custom-block-info custom-block-overlay-info" style="text-align:right">
                      <h5 class="mb-1" style="text-align: center;">
                          <a href="#" style="font-family: 'Tajawal',sans-serif;">
                              اختر الخدمة
                          </a>
                      </h5>
                      <p class="mx-auto tm-section-desc text-center">هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة لقد تم توليد هذا النص</p>
                  </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-overlay " >
                    <div 
                    style="                   
                    width:50%;
                    background-color: #fff;
                    border-radius: 25px;
                    padding: 15px;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
                    text-align: center;                
                    margin: 10px;
                    overflow: hidden;
                    margin: auto;
                    margin-bottom: 10px;
                    "
                    >
                     <a 
                     class="custom-block-image-wrap">
                     <i class="fi fi-rr-car-side" style="font-size: 70px; color:#21add9"></i>
                     <!-- <img src="images/car_icon.png" style="object-fit: cover;width: 70%;"> -->
                    </a>
                    
                </div>
                    <div class="custom-block-info custom-block-overlay-info" style="text-align:right">
                        <h5 class="mb-1" style="text-align: center;">
                            <a href="#" style="font-family: 'Tajawal',sans-serif;">
                                ابحث عن سياراتك
                            </a>
                        </h5>
                        <p class="mx-auto tm-section-desc text-center">هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة لقد تم توليد هذا النص</p>
                    </div>
                </div>
            </div>

      </div>
      </div>
  </section>
 

  <section style="margin-top: 45px;" >
    <div class="continer_circle">
        <div class="header_titel">
        <h1> !  حمل التطبيق الآن <br/> واستمتع بالعروض </h1>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
        <div style="display: flex;
            margin: 15px;">
        <button style="
            background-color: #000000;
            border-radius: 15px;
            padding: 5px;
            margin: 25px;
            ">
        <img src="images/googleplay.png" style="width: 80%;" >
        </button>
        <button style="
            background-color: #000000;
            border-radius: 15px;
            padding: 5px;
            margin: 25px;
            ">
        <img src="images/appstore.png" style="width: 80%;" >
        </button>
    
        </div>
        </div>  
    
    <div class="view_image">
    <img src="images/mobile.png" style="z-index: 999;position: absolute; width: 36%;">   
    <div class="circle">
    <div class="circle">
    <div class="circle">
        <div class="circle">
            <div class="circle"></div>
        </div>
    </div>
    </div>
    </div>
    </div>
  </div> 
</section>

    <!-- posts code -->
  <section id="gallery" class="tm-section-pad-top_tow">
  <div class="text-center col-12">
    <h2 class="tm-text-primary tm-section-title mb-2">ماذا يقوله الناس عنا </h2>
    <!-- <div class="mx-auto tm-gallery-container tm-gallery"> -->
        <div class="slider_posts d-flex tm-gallery-container tm-gallery p-0 ml-6"></div>

</div>            

</section>



<!-- <div class="container ml-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 d-flex m-5">
    <div class="col-auto ">
    <div class="list-group ">
      <div class="mx-auto d-flex m-5">
        <div class="ml-2" style="width: 50%;margin-top: 20px; margin-right: 40px;">
        <p style="text-align: right; font-family: 'Tajawal'; font-size: small; "  > May 15,2023  * قبل خمس دقائق   </p>
        <h3  class="title_news" style="line-height: 30px;"> <span>GTS</span>  ماكلارين تدشن السوبركار الجديدة كلياً 
          بقوة 635 حصان وتصميم جذاب
        </h3>
        <a href="#" style="display: flex;flex-direction: row-reverse; text-align: right;">
        <i class="fi fi-rr-angle-small-right" style="color:#2563eb;margin: 5px;"></i>
        <p style="font-family: 'Tajawal';font-size: 13px;margin: 5px; color: #2563eb;">مشاهدة المزيد</p>
        </a>
      </div>
        <img src="images/ماكلارين-GTS-8.jpg" alt="Image 1" class="me-3" 
        style="border-radius: 20px;width: 200px; height: 200px;
        object-fit: cover;
        ">
      </div>
  

      <div class="mx-auto d-flex m-5">
        <div class="ml-2" style="width: 50%;margin-top: 20px; margin-right: 40px;">
        <p style="text-align: right; font-family: 'Tajawal'; font-size: small; "  > May 15,2023  * قبل 14 ساعة   </p>
        <h3  class="title_news" style="line-height: 30px;"> 
          لكزس تتصدر قائمة أكثر 10 علامات تجارية للسيارات اعتمادية في العالم دراسة  
        </h3>
        <a href="#" style="display: flex;flex-direction: row-reverse; text-align: right;">
        <i class="fi fi-rr-angle-small-right" style="color:#2563eb;margin: 5px;"></i>
        <p style="font-family: 'Tajawal';font-size: 13px;margin: 5px; color: #2563eb;">مشاهدة المزيد</p>
        </a>
      </div>
        <img src="images/sabq_2023-03_991c870f-4c30-4bf6-8963-71a34430677c_PHOTO_2023_03_12_15_19_08.avif" alt="Image 1" class="me-3" style="
        border-radius: 20px;width: 200px; height: 200px;
        object-fit: cover;
        ">
      </div>

      <div class="mx-auto d-flex m-5">
        <div class="ml-2" style="width: 50%;margin-top: 20px; margin-right: 40px;">
        <p style="text-align: right; font-family: 'Tajawal'; font-size: small; "  > May 15,2023  * قبل خمس دقائق   </p>
        <h3  class="title_news" style="line-height: 30px;">
          صندوق الثروة السيادية سيستحوذ على ماكلارين خلال الايام القادمة 
        </h3>
        <a href="#" style="display: flex;flex-direction: row-reverse; text-align: right;">
        <i class="fi fi-rr-angle-small-right" style="color:#2563eb;margin: 5px;"></i>
        <p style="font-family: 'Tajawal';font-size: 13px;margin: 5px; color: #2563eb;">مشاهدة المزيد</p>
        </a>
      </div>
        <img src="images/1_DM_RRA_Aug 2022.jpg" alt="Image 1" class="me-3"
        style="border-radius: 20px;width: 200px; height: 200px;
        object-fit: cover;
        ">
      </div>
    </div>
    </div>
    
    <div >
    <div class="list-group ">
      <div class="mx-auto ">
      <div 
      style="
      display: flex;
      justify-content: flex-end;
      align-items: flex-end;
      flex-direction: column;
      text-align: right;
      /* border: solid 5px #000; */
      ">
      <p  style="
        background-color: #eff6ff;
        text-align: center;
        width: 20%;
        border-radius:40%;
        padding: 3px;
        font-family: 'Tajawal',sans-serif;
        font-size: small;
        color: #2d3291;
        ">مدونة</p>
        <h1
        style="      
        font-family: 'Tajawal';
        color: #000000;
        font-size: 45px;
        "
        >احدث المقالات والاخبار</h1>
        <a href="#" style="
        display: flex; 
        flex-direction: row-reverse; 
        background-color: #2d3291;
        border-radius: 25px;
        padding-right: 15px;
        padding-left: 15px;
        margin-top: 20px;
        margin-bottom: 20px;
        ">
          <i class="fi fi-rr-angle-small-right" style="color:#ffffff;margin: 5px;"></i>
          <p style="font-family: 'Tajawal';font-size: 13px;margin: 5px; color: #ffffff;"> المزيد</p>
          </a>
    </div>

    <div class="container m-5">  
      <img src="images/background_care.png" alt="Image 1" class="me-3" 
      style="border-radius: 20px;
      width: 280px;
      height: 280px;
      position: relative;
      right: 92px;
      top:100px
      ">
      <img src="images/mansory-f8xx-spider-tempesta-turchese-cover-1682868994.jpg" alt="Image 1" class="me-3"
    style="border-radius: 20px;
    width: 300px;
    height: 300px;
    z-index: 999;
    position: relative;
    right:2px;
    top:-250px;
    object-fit:fill;
    ">

  </div>

      </div>
  
    </div>
    </div>
    </div>
  </div>
</div> -->




     
      @endsection
