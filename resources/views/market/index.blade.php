
@extends('layouts.app-master')
@section('content')
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center">
                            <h1 class="mb-0" style="font-family: 'Tajawal'">التسويق الألكتروني</h1>
                            <h2 class="mb-0">actronk Marketing</h2>
                        </div>
                    </div>
                </div>
            </header>
            @if(session()->has('message'))
            <div  style="background-color: rgb(56, 210, 252)">
                <div >
                    <div class="modal-dialog">
                        <div   style="background-color: rgb(56, 210, 252); text-align:center">
                                <strong>عميلنا العزيز</strong>{{ session()->get('message') }}
                        </div>
                    </div>
                </div>
            </div>  
            @endif
            <section class="topics-section  mt-4 pb-5 " style="width:80% ; margin: auto;">
                <div class="card  " style="border-width:0; text-align: right;">
                    <div class="card-header">
                        <h5 class="card-title" style="font-family: 'Tajawal'">ما هو التسويق الرقمي ؟ </h5>
                        <h6 class="card-title" style="font-size: 14px;">Digital Marketing</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style=" color:black;"> التسويق قديم قدم الزمن، وهو عنصر أساسي لنجاح أي بيزنس بصرف النظر عن حجمه
                            والمجال الذي ينتمي له، ولقد ظل التسويق لعقود محصوراً في المجلات والجرائد واللافتات في الطرق.
                            وكانت هذه هي القنوات التسويقية الأكثر تطوراً وفاعلية حتى ظهر الإنترنت والتكنولوجيا الحديثة وتغير
                            كل شيء، وبدأ عصر جديد ومفهوم جديد للتسويق يسمى بعصر الديجيتال ماركتنج أو Digital Marketing.
                            بوجود التسويق الرقمي تم تغيير الكثير من المفاهيم عن التسويق وعلاقة المؤسسة بالمستخدم النهائي،
                            فمن خلاله يمكن الوصول للعميل المستهدف في المكان والوقت المناسب، بل والحالة الأفضل لاتخاذ قرار
                            الشراء.
                            حيث نقوم بشركتنا بتطبيق المبادئ العامة في علم التسويق من خلال استخدام أدوات التكنولوجيا الحديثة،
                            وبشكل خاص الإنترنت، جيث لدينا من الخبرة ما تكفي لتنفيذ الاحترافي للتكتيكات والاستراتيجات
                            التسويقية التي تُستخدم لتحويل العميل المستهدف الذي لاتراه بعينك إلى مشتري.
                            فلدينا نعمل عبر الدراسات والأبحاث المستمرة في تطوير وسائل التسويق للوصول للعميل بطرق مبتكرة
                            وعصرية تساعد من رفع الحصة السوقية للشركة في السوق المستهدفة بفترات قياسية..
                        </p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                    <div class="card mb-3" style="max-width:100%;margin: 15px;">
                        <div class="row g-0">
                            <div class="col-md-12" style="max-width:50%; margin: auto;">
                                <img src="images/sistem.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-0  ">
                                <div class="card-body">
                                    <h5 class="card-title"style="font-family: 'Tajawal'">ادارة حسابات التواصل الاجتماعي</h5>
                                    <p class="card-text text-justify " style=" color:black;"> تقدم شركة فوريو
                                        استوديو أكبر شركات الإنتاج الإعلامي والتسويق في إقليم سباء خدمة ادارة حسابات التواصل
                                        الاجتماعي، إحدى الخدمات التسويقية التي تقدمها فوريو للتسويق عبر الإنترنت، فالجميع
                                        الآن لاينكر أهمية التسويق عبر مواقع السوشيال ميديا المختلفة، والشركات والمؤسسات
                                        التجارية مهما كان حجمها تسعى للتواجد بقوة على حسابات التواصل الاجتماعي المختلفة.
                                        إلا أن مواقع التواصل الاجتماعي مختلفة من حيث الجمهور وآلية التسويق واستراتيجية
                                        العمل، نحن في فوريو استوديو للإنتاج الإعلامي والتسويق قدمنا خدمة ادارة حسابات
                                        التواصل الاجتماعي للكثير من العملاء ولازلنا نقدم هذه الخدمة بنجاح ونتائج مميزة،
                                        ونعرف جيدًا قواعد استخدام الشبكات الاجتماعية للتسويق وفقًا لطبيعة مستخدم كل منصة،
                                        حيث تتطلب خدمة ادارة حسابات التواصل الاجتماعي المتعددة أساليب مختلفة ، لذلك نقوم
                                        بتطوير استراتيجية فريدة مصممة لكل منصة.
                                        <span className={style.spanfeac}>⇐التسويق عبر فيس بوك :</span>
                                        فيس بوك هو المكان الذي يذهب إليه الأشخاص للاسترخاء والدردشة مع الأصدقاء، لذلك نحافظ
                                        على تقديم محتوى بنغمة ودودة قريبة من الجمهور وبشكل شخصي بعيدًا عن الرسمية المنفرة في
                                        بعض الأحيان، كما أن المحتوى المرئي في الفيس بوك هو المحتوى الأساسي،بالإضافة إلى أن
                                        إمكانية الوصول إلى المحتوى على فيس بوك بالطرق العادية يمكن أن تكون محدودة للغاية،
                                        لذا نضع في الاعتبار استراتيجية الإعلانات المدفوعة ، والتي يكون لها تأثير كبير على
                                        حضورك على Facebook .
                                        <span className={style.spanfeac}>⇐التسويق عبر انستجرام:</span>
                                        انستجرام هو الموقع رقم واحد من حيث تواجد المستخدمين في كثير من دول الآن، واستراتيجية
                                        التسويق عبر انستجرام تتشابه بشكل كبير بالتسويق عبر الفيس بوك ألا أنه لاوجود للنصوص
                                        المكتوبة بشكل منفصل في انستجرام بعكس الفيس بوك الذي يوفر خاصية المنشورات المكتوبة،
                                        انستجرام يعتمد على المحتوى المرئي فقط
                                        <span className={style.spanfeac}>⇐التسويق عبر تويتر:</span>
                                        Twitter هو أداة تسويقية مؤثرة، في بناء استراتيجية ناجحة لتويتر فإننا نعمل على خلط
                                        تغريداتك الرسمية حول العروض الخاصة، والخصومات، والأخبار مع قليل من المرح حتى لايمل
                                        المتابع، كما أننا نحرص على نشر تويتات تساهم في بناء العلامة التجارية الخاصة بك عن
                                        طريق توضيح رسالة العلامة وأهدافها.
                                        كما نتأكد من إعادة التغريدات التي يتحدث فيها العملاء عن علامتك التجارية بشكل إيجابي
                                        والإجابة عن أسئلة الأشخاص عندما يكون ذلك ممكنًا، إن استخدام Twitter كأداة للتسويق
                                        عبر وسائل التواصل الاجتماعي يدور حول الحوار والتواصل ، لذا نهتم بالتفاعل مع الجمهور
                                        بشكل كبير وبكل الطرق المتاحة.
                                        .
                                        <span className={style.spanfeac}>⇐التسويق الإلكتروني على يوتيوب :</span>
                                        يعد YouTube المكان الأول لإنشاء محتوى الفيديو ومشاركته، ويمكن أن يكون أيضًا أداة
                                        تسويق إعلامية اجتماعية قوية بشكل لا يصدق إذا تم استخدامه بشكل صحيح من قبل الخبراء في
                                        خدمة ادارة حسابات التواصل الاجتماعي، تحاول العديد من الشركات إنشاء محتوى فيديو بهدف
                                        جعل الفيديو الخاص بها “سريع الانتشار”، ولكن في الواقع هذه طريقة خاطئة لاتبني جمهور
                                        حقيقي على اليوتيوب، بدلاً من ذلك يجب التركيز على إنشاء مقاطع فيديو إرشادية مفيدة
                                        وذات قيمة حقيقة. تتمتع مقاطع الفيديو الإرشادية أيضًا بميزة إضافية تتمثل في الحصول
                                        على ترتيب في نتائج بحث الفيديو من Google .
                                        إذا كنت تسعى لتطوير أعمالك والحصول على المزيد من العملاء لا تتردد في طلب خدمة ادارة
                                        حسابات التواصل الاجتماعي من فوريو أفضل شركات ادارة مواقع التواصل الاجتماعي بإقليم
                                        سباء ، لمستقبل وواقع أفضل لأعمالك.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>          
            <section class="topics-section" style="width:80%; margin: auto; margin-top: 10px; margin-bottom: 55px;">
                <header class="col-12 text-center text-white tm-bg-black-transparent p-1 tm-app-header">              
                <strong style="text-align: center; font-family:Tajawal;   font-size:20px;
                color:black;" >للأستفسارات او طلب عرض سعر يرجعى تعبيئة البيانات التالية ليتم التواصل معكم
                </strong>
                <form action="{{ route('market.store') }}" method="POST" enctype="application/json">
                    @csrf
                    <div class='select'>
                        <span style="display: grid; justify-content: center; align-items: center;font-family:Tajawal; font-size: large;"> حدد
                        مالخدمة التي تريد من طاقم الشركة بتنفيذها     
                        </span>
                        <select class="form-control text-center" id="floatingSelect" name="servicng"
                            aria-label="Floating label select example " style="margin-bottom: 15px">
                            <option selected>إدارة صفحات سوشل ميديا</option>
                            <option name="1">إدارة محتوى موقع ويب </option>
                            <option name="2">إنشاء محتوى يوتيوب للشركة </option>
                            <option name="3">إعلان ممول</option>
                            <option name="4">تطوير موقع الكتروني</option>
                            <option name="5">اخرى</option>
                        </select>
                    </div>
                    <input class="form-control" type="email" style={text-alin:right} required   placeholder='إيميل' name='email'  > 
                    <div id="inputconct"></div>
                    <textarea class="form-control text-center" name='description' id="exampleFormControlTextarea1" rows="3"
                        placeholder="أي ملاحظات؟*" pattern="^{3,16}$" required="true"></textarea>
                    <div class="buttonsent"
                        style="display: flex; justify-content: center;margin-top: 10px; margin-bottom: 15px;">
                        <button type='submit' id="winner" class="btn btn-primary">sent|إرسال</button>
                    </div>
                </form>
                {{-- <input class="form-control" type="datetime-local" required="true" name="control" /> --}}
                </header>
            </section>
            <script>
                const inputmapconc = document.querySelector('#inputconct');
                const inputs = [
                    {
                        id: 1,
                        name: "firstName",
                        type: "text",
                        placeholder: "الاسم الكريم",
                        errorMessage: "يجب ان لاتكون هذه الخانة فارغه ",
                        label: "firstName",
                        pattern: "/^{7,}$/",
                        required: true,
            
            
                    },
                    {
                        id: 2,
                        name: "namberPhon",
                        type: "text",
                        placeholder: "رقم هاتفك لكي يتم التواصل معك",
                        errorMessage: " يجب ان لاتكون فارغه وان يكون الرقم صحيحاً ",
                        label: "namberPhon",
                        pattern: "/^{9,13}{4}$/",
                        required: true,
                    },
                    {
                        id: 3,
                        name: " CountryName",
                        type: "text",
                        placeholder: " البلد/المدينة/المنطقة",
                        errorMessage: "اضف البلد او المنطقة التي تسكن فيها ",
                        label: "CountryName",
                        pattern: "^{3,16}$",
                        required: true,
                    },
                    {
                        id: 4,
                        name: "jopName",
                        type: "text",
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
                    //     pattern: "[^@\s]+@[^@\s]+",
                    //     required: true,
                    // }
                ]
                inputs.map((name, key) => {
                    // <Frominput className="form-control" key={input.id}   value={values[input.name]} onChange={onChange}/>          
                    let html = `
                      <input class="form-control" style={text-alin:right} required=${name.required}  pattern=${name.pattern} key=${key} placeholder=${name.placeholder} name=${name.name}  onChange='onChange()'/>
                     
                      `
                    inputmapconc.insertAdjacentHTML('afterbegin', html);
                })
                
            </script>
            <style>
                .contact {
                    width: 100%;         
                    margin-top: 7rem;     
                }
                input {
                    padding-top: 2rem;
                    margin-bottom: 15px;
                    text-align: center;
                }
            </style>        
@endsection

