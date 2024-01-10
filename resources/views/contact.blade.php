<nav class="heronab-section ">
    @extends('layouts.app-master')
</nav>
@if(session()->has('message'))
<div class="alert alert-primary"   role="alert">
    <div style="text-align:center">
        <strong>عميلنا العزيز</strong>{{ session()->get('message') }}
    </div>
  </div>
   @endif 
@section('content')
    <section class="topics-section seinpcon  mt-4 pb-5 " style=" margin: auto; margin-bottom:150px;padding:15px ">
        <h5 style="text-align: center; font-size:small; font-family:Tajawal" >عزيز الزائر سجل بيانات طلبك وسيتم التواصل معك باقرب وقت </h5>
        <form action="{{ route('contact.store') }}" method="POST" enctype="application/json">
            @csrf
            <span style="display: grid; justify-content: center; align-items: center; font-size:small;font-family:Tajawal;"> حدد الخدمة التي
                ترغب لتنفيذها</span>
            <select class="form-control text-center " style="margin-bottom: 15px" id="floatingSelect" name="servicng"
                aria-label="Floating label select example">
                <option selected>حدد نوعية الخدمة </option>
                <option name="1">حملة إعلانية </option>
                <option name="2">اجهة لكبوند</option>
                <option name="3">لوحة ضوئية</option>
                <option name="4">طباعة قماش</option>
                <option name="5">طباعة بنر</option>
                <option name="6">طباعة لاصق ابيض</option>
                <option name="7">طباعة لاصق حراري</option>
                <option name="8">طباعة لاصق ميش</option>
                <option name="9">طباعة حراري</option>
                <option name="10">ختم</option>
                <option name="11">استاندات مكاتب</option>
                <option name="12">استاندات ابواب</option>
                <option name="13">هدايا شركات</option>
                <option name="14">اخرى</option>
            </select>
            <input   class="form-control text-center" type="email" style={text-alin:right} required   placeholder='إيميل' name='email'  > 
            <div id="inputup"></div>
            <textarea class="form-control text-center" name='description' id="exampleFormControlTextarea1" rows="3"
                placeholder="أي ملاحظات؟*" pattern="^{3,16}$" required="true"></textarea>
            <div style=" padding:5px;display:flex; justify-content:center; align-self:center">
                <button type='submit' id="winner" class="btn btn-primary">sent|إرسال</button>
            </div>
        </form>
    </section>
    <script>
        const inputmap = document.querySelector('#inputup');
        const inputs = [{
                id: 1,
                name:"firstName",
                type:"text",
                placeholder: "الاسم الكريم",
                errorMessage: "يجب ان لاتكون هذه الخانة فارغه ",
                label:"firstName",
                pattern: "/^{7,}$/",
                required: true,
            },
            {
                id: 2,
                name:"namberPhon",
                type: "text",
                placeholder: "رقم هاتفك لكي يتم التواصل معك",
                errorMessage: " يجب ان لاتكون فارغه وان يكون الرقم صحيحاً ",
                label: "namberPhon",
                pattern: "/^{9,13}{4}$/",
                required: true,
            },
            {
                id: 3,
                name:"CountryName",
                type:"text",
                placeholder: " البلد/المدينة/المنطقة",
                errorMessage: "اضف البلد او المنطقة التي تسكن فيها ",
                label: "CountryName",
                pattern: "^{3,16}$",
                required: true,
            },
            {
                id: 4,
                name:"jopName",
                type:"text",
                placeholder: "الوظيفة",
                errorMessage: "اضف مجال العمل الذي تعمل فيه",
                label: "jopName",
                pattern: "^{3,16}$",
                required: true,
            },
            // {
            //     id: 5,
            //     name: "email",
            //     type: "email",
            //     placeholder: "إيميل",
            //     errorMessage: "It should be a valid email address!",
            //     label: "email",
            //     pattern: "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$",
            //     // pattern: "[^@\s]+@[^@\s]+",
            //     required: true,
            // }
        ];
        inputs.map((name, key) => {
                let html =`<input class="form-control text-center"  required=${name.required}  pattern=${name.pattern} key=${key} placeholder=${name.placeholder} name=${name.name}> `
            inputmap.insertAdjacentHTML('afterbegin', html);
        })
    </script>
    <style>
        .contact {width: 100%;margin-top: 7rem;}
        input {margin-bottom: 15px;}
    </style>
@endsection
