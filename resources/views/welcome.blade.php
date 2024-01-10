@extends('layouts.app-master')
@section('content')
    <main>
        <section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-5">
                            <img src="images/4u.png" style=" margin: auto;margin-bottom:15px; width: 150px;"
                                class="logo-image img-fluid">
                            <div class="word-waves">
                                <span>فوريو للطباعة والأعلان</span>
                                <span>فوريو للطباعة والأعلان</span>
                            </div>
                            <p class="mb-0 small" style="color:#fdffff; font-family:'Tajawal'; font-size: 17px ;">شركة رائدة
                                في مجال الدعاية والاعلان والتسويق الالكتروني</p>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="owscrol">
                    </div>
                </div>
            </div>
        </section>
        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row g-0 ">
                    <div class="col-md-4"
                        style="display: flex; justify-content: center; align-self: center; align-items: center;">
                        <img src="images/man1.png" class="img-fluid rounded-start" style=" width: 50%;" alt="...">
                    </div>
                    <div class="col-md-8" style="margin: auto">
                        <div class="card-body" style="text-align: center;display: grid; margin: auto;">
                            <span class="text-black" style="font-size:xx-large;   font-family:Tajawal">هل انت مستعد للتغيير
                                ؟</span>
                            <span class="card-text"
                                style="margin-bottom: 15px;margin-top: 15px; color: black; font-size:20px;font-family:Tajawal">نقدم
                                افضل الأفكار الإبداعية لجذب إنتباه العملاء المستهدفين
                                العميل ونبني القيمة ونطور افضل الحلول التي تلائم إحتياجات
                                المضافة للعلامة التجارية ونستثمر بشكل مكثف في اعمال البحث والتطوير
                                لإيجاد منتجات إبداعية مبتكرة </span>
                            <a href="{{ route('contact.create') }}" class="btn btn-primary">اتصل بنا</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="owl-carousel owl-theme" id="owscrol"></div> -->
        <section class="topics-section section-padding pb-0" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5" style="text-align:right">
                            <h4 class="section-title">خدماتنا</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="{{ route('print.index') }}" class="custom-block-image-wrap">
                                <img src="images/img-9.jpg" class="custom-block-image img-fluid" alt="">
                            </a>
                            <div class="custom-block-info custom-block-overlay-info" style="text-align:right">
                                <h5 class="mb-1">
                                    <a href="#">
                                        لامبوستات شوارع
                                    </a>
                                </h5>
                                <p class="badge mb-0">50 اعلانات الطرقات </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="#" class="custom-block-image-wrap">
                                <img src="images/2A4A1724.jpg" class="custom-block-image img-fluid" alt="">
                            </a>
                            <div class="custom-block-info custom-block-overlay-info" style="text-align:right">
                                <h5 class="mb-1">
                                    <a href="#">
                                        واجهات كلادنج لمطعم المذاق اليمني
                                    </a>
                                </h5>
                                <p class="badge mb-0">12 صناعة الواجهات</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="{{ route('print.index') }}" class="custom-block-image-wrap">
                                <img src="images/h7.jpg" class="custom-block-image img-fluid" alt="">
                            </a>
                            <div class="custom-block-info custom-block-overlay-info" style="text-align:right">
                                <h5 class="mb-1">
                                    <a href={{ route('print.index') }}">
                                        نحت ليزر لبرج ايفل
                                    </a>
                                </h5>
                                <p class="badge mb-0">35 قسم الليزر</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="{{ route('market.index') }}" class="custom-block-image-wrap">
                                <img src="images/Server4.png" style="object-fit:contain"
                                    class="custom-block-image img-fluid" alt="">
                            </a>
                            <div class="custom-block-info custom-block-overlay-info" style="text-align:right">
                                <h5 class="mb-1">
                                    <a href="{{ route('market.index') }}">
                                        إدارة متكاملة ذوء كفاءة عالية في التسويق
                                    </a>
                                </h5>
                                <p class="badge mb-0">12 قسم التسويق </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-lg-7 col-12 mx-auto">
            <div class="pb-5 mb-5">
                <div class="section-title-wrap mb-4 " style="text-align:right;">
                    <h4 class="section-title">مجالات خبرتنا </h4>
                </div>
                <p style="color: black; "> نلعب دوراً هاماً في تغيير طريقة عرض المحتوى الاعلاني وزيادة التفاعل بين المعلنين
                    والعلامة التجارية والعملاء المستهدفين والحفاظ على المصداقية في التصميم والشراكة في تغيير الصورة الذهنية
                    للعملاء تجاه الشركات والمؤسسات التي نقوم بالاشراف على برنامجها التسويقي ،ونطور افضل الحلول المتخصصة
                    لتحقيق اهداف العميل ونبني قيمة مضافة للعلامة التجارية والتواصل مع العملاء،ونستثمر بشكل مكثف في اعمال
                    البحث والتطوير لإيجاد منتجات إبداعية مبتكرة.
                </p>
                <img src="images/medium-shot-young-people-recording-podcast.jpg" class="about-image mt-5 img-fluid"
                    alt="">
            </div>
        </div>
    </main>
@endsection
