@extends('front.layout.app')
@section('content')

    <section id="particles-js"  class="hero-wrap"  data-stellar-background-ratio="0.3">
        <div class="slide-box" id="index">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate d-flex align-items-end">
                        <div class="text">
                            <h1 class="mb-4"> شركة تطوير برمجيات وحلول تقنية مخصصة</h1>
                            <p style="font-size: 18px;">
                                ديفيست هنا لإدخالك في اللعبة ولتغيير جميع القواعد وتحويل رؤيتك إلى حقيقة،
                                أيًا كان ما تحتاج إليه لتحويل عملك أو فكرتك إلى شيء كبير، فلدينا فريق عمل مناسب لك ولفكرتك ولدينا كل المعرفة الكافية لتخصصك،
                                دعنا نبدأ معك رحلتك الرقمية، وندخل اللعبة سويًا، لنواجه تحدياتك بالنيابة عنك.

                            </p>
                            <div class="d-flex meta">
                                <div class=""><p class="mb-0"><a href="#about" class="btn btn-primary py-3 px-2 px-md-4 slider-button">معرفة المزيد عنا</a></p></div>
                                <a href="#contact" class="d-flex align-items-center button-link slider-button">
                                    <div class=""><p class="mb-0"><a href="#contact" class="btn btn-primary py-3 px-2 px-md-4">تواصل معنا</a></p></div>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div >
    </div>
    <section class="ftco-section ftco-portfolio about" id="about">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">معلومات وتفاصيل عن الشركة وآلية عملها وأهدافها</span>
                <h2 class="mb-2">معلومات عن الشركة</h2>
            </div>
        </div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 portfolio-wrap">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 img js-fullheight" style="background-image: url({{asset('assests/front//images/work-1.jpg')}});">

                        </div>
                        <div class="col-md-7">
                            <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">

                                    <div class="desc">
                                        <div >
                                            <h3 class="mb-4">من نحن؟</h3>
                                        </div>
                                        <div class="absolute">
                                            <p>
                                                ديفيست هي شركة استشارات إدارية تقوم بتمكين العملاء لدخول لعبة مستقبلهم الرقمي، من خلال خبرتنا وفريق عملنا المتكامل، نحن نجمع بين الخبرات المحلية والعالمية لنضمن وجودنا دائمًا بجانبك وأنت تقوم بعمل تحويل شامل لأعمالك.
                                                إذ نحن المؤسسة التي ستجعل استثمارات مشروعك في أمان
                                                هنا ستجد الطموح يلتقي بالابتكار، وستجد المستحيل يتحول إلى حقيقة، والغريب يتحول إلى شيء مألوف يلمس الواقع الخاص بك
                                                نحن من سنحول فكرتك إلى حقيقة ناجحة وملموسة.
                                            </p>
                                            <p><a href="#our-work" class="custom-btn">مجالات العمل</a></p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 portfolio-wrap">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 order-md-last img js-fullheight" style="background-image: url({{asset('assests/front//images/work-2.jpg')}});">

                        </div>
                        <div class="col-md-7">
                            <div class="text pt-5 pr-md-5 ftco-animate">
                                <div class="px-4 px-lg-4">
                                    <div class="desc text-md-right">
                                        <div class="">

                                            <h3 class="mb-4">ما هو نهج ديفست في العمل؟</h3>
                                        </div>
                                        <div class="absolute">
                                            <p>
                                                نحن نساعدك في تحقيق حلمك أيًا كان حجمه خطوة بخطوة من أول الفكرة حتى التنفيذ.
                                                مع ديفيست قم بإحضار كل ما سيغير قواعد اللعبة الخاصة بك من وجهة نظرك لنا،
                                                وخبرائنا في الاستراتيجيات والتكنولوجيا والتسويق سيقومون بظبط كل شيء وتحويله إلى ما تحلم به تمامًا.
                                                فريق ديفيست يعملون معًا لإعداد مؤسستك لتحقيق النجاح، سنحقق أهداف دخولك اللعبة معنا من خلال الاستفادة من معرفتنا العميقة بالمجال وخبرتنا به، ومن خلال فريق التكنولوجيا القوي في ديفيست.

                                            </p>
                                            <p><a href="#our-work" class="custom-btn">مجالات العمل</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<hr>
    <section class="our-work" id="our-work">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">المجالات والصناعات التي نعمل حالياً على تطوير برمجيات متقدمة لدعمها وحل مشكلاتها</span>
                    <h2>مجالات عملنا</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="our-work-box">
                      <div class="icon d-flex justify-content-center align-items-center "><span class="flaticon-blueprint"></span></div>
                      <div class="plan-box text-center">
                          <h3>استشارات إدارية</h3>
                          <p>
                              مهمتنا هي تمكينك من فتح باب يطل على المستقبل الرقمي لكي تنقل عالمك التجاري نحوه، نقدم لك خدمات استشارية في مجالات: التخطيط والاستراتيجيات، التحول الرقمي، النمو، الابتكار، وإدارة دورة حياة المنتج والعمليات الخاصة به، وإدارة سلسلة التجهيز لتعظيم فرصك في لعبة الأعمال التجارية.

                          </p>
                      </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="our-work-box">
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-store fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>تمكين المبيعات</h3>
                          <p>
                              أي مشروع رقمي تواجهه تحديات تحتاج إلى معالجة لضمان التنفيذ القوي، نحن في ديفيست سنساعدك في مواجهة جميع تحديات لعبة المبيعات
                          </p>
                      </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="our-work-box">
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-shopping-basket  fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>التطوير البرمجي</h3>
                          <p>
                              نقدم لك المنتجات البرمجية بالطريقة التي تريدها،
                              نصمم لك المشروع الرقمي الذي يناسب شركتك كما نساعدك على إيجاد حلول برمجية مناسبة لإنقاذ مشروعك، وننشئ لك منتجات رقمية تساعدك في اجتياز كل المشكلات التي ستواجهك في اللعبة الرقمية.
                          </p>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="our-work-box">
                      <div class="icon d-flex justify-content-center align-items-center "><span class="flaticon-blueprint"></span></div>
                      <div class="plan-box text-center">
                          <h3>خدمات تطوير تطبيقات الأعمال</h3>
                          <p>
                              نقوم بإنشاء تطبيقات للشركات بالتعاون مع مالكيها ونهدف إلى تحقيق غاية وهدف عملائنا بشكل كامل، احتياجاتك، ومتطلباتك ونواياك هي ما يهمنا في عملية تطوير تطبيقات الأعمال.
                          </p>
                      </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="our-work-box">
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-store fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>خدمات تطوير تطبيقات الجوال</h3>
                          <p>
                              نقوم ببرمجة وتطوير جميع مشاريع الأجهزة الجوالة، بمختلف المقاييس والتعقيد بدءًا من تطبيقات الشركات إلى تطبيقات الجوال المستقلة.
                              سنساعدك للوصول إلى جمهور الجوال المناسب لك من الفكرة الأولية إلى تصميم المنتج النهائي، يوفر فريق التطوير بشركة ديفيست تطبيقات مخصصة للهاتف الجوال تلبي معاييرك وتساعد عملك على البقاء عل ى اتصال باللعبة الرقمية،
                              ومع مستوى الابتكار والجودة الذي نضعه في كل تطبيق من تطبيقاتنا يمكننا تعزيز علاقتك بعميلك، وتحسين تجربة المستخدم الشاملة على أجهزتهم الجوالة.
                          </p>
                      </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="our-work-box">
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-shopping-basket  fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>خدمات تصميم وبرمجة المواقع والمتاجر الالكترونية</h3>
                          <p>
                              أطلق عنان مشروعك أو تجارتك لقوة الويب، اترك معنا أفضل أول انطباع لدى عميلك سنجعلك تظهر بشكل محترف على شاشة الكومبيوتر، حيث نقوم بمواءمة مواهب وخبرات فريق ديفيست لإنشاء مواقع ومتاجر الكترونية تفاعلية فريدة من نوعها لتلبية أهداف عملك، حيث نقوم بمزج أفكار التصميم المبتكرة مع المفاهيم المعترف بها على نطاق واسع، ديفيست ستجعلك سيد اللعبة وستجعل منتجاتك وخدماتك متاحة للملايين.</p>
                      </div>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="our-work-box">
                        <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-shopping-basket  fa-3x"></i></div>
                        <div class="plan-box text-center">
                            <h3>نصمم هوية تجارية كاملك لك</h3>
                            <p>
                                نقوم بتصميم العلامات التجارية للشركات بعناية

                                لأن علامتك التجارية هي الانطباع الذي تتركه شركتك في أذهان عملائك الحاليين والمحتملين والموظفين أيضًا، ولأنها توضح رؤيتك، هويتك، وأهدافك.
                                تساعد ديفيست الشركات على الظهور لعملائها بأفضل هوية بصرية ممكنة ولأجل ذلك لدينا فريق عمل مختص ومحترف من المصممين لنجعلك تظهر بأفضل شكل ممكن لنجعلك تتميز بين منافسينك في اللعبة الرقمية.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<hr>

<section class="ftco-section" id="projects">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">المجالات والصناعات التي نعمل حالياً على تطوير برمجيات متقدمة لدعمها وحل مشكلاتها</span>
                <h2>مشاريعنا</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="img" style="background-image: url({{asset('assests/front//images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2 text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>نظام المنتسبين</li>
                            <li><p>Advanced and Modern E-commerce platform that helps sellers connect with marketers and affiliates people that have the ability to reach buyers easily by their selling channels</p></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="img" style="background-image: url({{asset('assests/front//images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2  text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>منصة التجارة الالكترونية</li>
                            <li><p>E-Commerce Project, we'll publish more info at the right time</p></li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="img" style="background-image: url({{asset('assests/front//images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2  text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>مشروع تجارة إلكترونية</li>
                            <li><p>E-commerce Project that will help merchants and small-to-medium stores to start selling online!</p></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">اراء العملاء</span>
                <h2 class="mb-3">ماذا قالوا عنا</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_1.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_2.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_3.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_1.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_2.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
    <section class="contact" id="contact">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">

                <h2 class="mb-2">تواصل معنا</h2>
                <span class="subheading">اترك لنا رسالة وسوف نقوم بالرد عليك بأسرع وقت ممكن</span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <dive class="col-md-9 sm-12">
                    @include('front.messages.session')
                    <form method="POST" action="{{route('front.send')}}" class="bg-light p-5 contact-form">
                      @csrf

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="الاسم " required>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">

                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="الاميل الخاص بك" required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="الموضوع" required>
                            @error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea required name="message" id=""  cols="30" rows="5" class="form-control" minlength="15" placeholder="الرساله"></textarea>
                            @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="submit btn btn-danger py-3 px-5 message">إرسال الرسالة  </button>
                        </div>
                    </form>
                </dive>
                <dive class="col-md-3 sm-12 text-right">
                    <p class="text-right text-box">أو تواصل معنا عبر الوسائل اﻵتية:</p>

                    <a class="box-info ">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2">
                                  <div class="socail-icon-box">
                                      <i class="fas fa-envelope fa-2x"></i>
                                  </div>
                              </div>
                              <div class="col-md-10">
                             <div class="box">
                                 <p>  البريد الالكتروني</p>
                                 <p>info@devest.com</p>
                             </div>
                              </div>
                          </div>
                        </div>
                    </a>


                    <a class="box-info ">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2">
                                  <div class="socail-icon-box">
                                      <i class="fab fa-facebook-f "></i>
                                  </div>
                              </div>
                              <div class="col-md-10">
                             <div class="box">
                                 <p>الفيسبوك</p>
                                 <p>info@devest.com</p>
                             </div>
                              </div>
                          </div>
                        </div>
                    </a>


                    <a class="box-info ">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2">
                                  <div class="socail-icon-box">
                                      <i class="fas fa-mobile-alt"></i>
                                  </div>
                              </div>
                              <div class="col-md-10">
                             <div class="box">
                                 <p>  التيلفون </p>
                                 <p class="phone">+20 502 727 737</p>
                             </div>
                              </div>
                          </div>
                        </div>
                    </a>


                </dive>
            </div>
        </div>
    </section>
@endsection
