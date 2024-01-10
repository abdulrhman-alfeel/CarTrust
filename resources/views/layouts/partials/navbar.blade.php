<header>
    <div class="tm-nav" style="display: flex ;justify-content:flex-end;">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="resh"></div>
                <div class="custom-form search-form flex-fill me-3 " style="margin-right: 15px;">
                    <div class=" input-group-lg">
                        {{-- <i  class="bi-search"></i> --}}
                        <input class="form-control text-center" style="font-family: Tajawal"
                            placeholder='ابحث في اعمال الشركة' id="search">
                        <div id='exampled'></div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="btnnoneS">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto" id="navbarNavreact">
                        <li class="nav-item">
                            <a class="nav-link active" style="font-family: 'Tajawal'"   href="{{ route('welcome') }}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: 'Tajawal'"  href="{{ route('about') }}">من نحن</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" style="font-family: 'Tajawal'"  aria-expanded="false">الاقسام</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" style="font-family: 'Tajawal'"  href="{{ route('print.index') }}">التصميم والطباعة</a></li>
                                {{-- <li><a class="dropdown-item" href="#section_2">القسم الفني والدعاية</a></li> --}}
                                <li><a class="dropdown-item" style="font-family: 'Tajawal'"  href="{{ route('market.index') }}">التسويق الألكتروني</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  style="font-family: 'Tajawal'"  href="{{ route('contact.create') }}">اتصل بنا</a>
                        </li>
                        @auth
                            {{ auth()->user()->name }}
                            <a class="nav-link" href="#">{{ Auth::user()->username }}<span
                                    class="sr-only">(current)</span></a>
                        @else
                            <a class="nav-link" style="font-family: 'Tajawal'"  href="#">اسم المستخدم <span class="sr-only">(current)</span></a>
                        @endauth
                        @auth
                            {{ auth()->user()->name }}
                            <div class="nav-item ">
                                <a href="{{ route('logout.perform') }}" style="font-family: 'Tajawal'"  class="nav-link">تسجيل الخروج</a>
                            </div>
                        @endauth
                        @guest
                            <div class="nav-item row">
                                <a href="{{ route('login.perform') }}" style="font-family: 'Tajawal'"  class="nav-link" href="services.html">دخول</a>
                                <a href="{{ route('register.perform') }}" style="font-family: 'Tajawal'"   class="nav-link">تسجيل جديد</a>
                            </div>
                        @endguest
                    </ul>
                    <!-- btn custom-btn custom-border-btn  -->
                </div>
            </div>
        </nav>
    </div>
</header>
