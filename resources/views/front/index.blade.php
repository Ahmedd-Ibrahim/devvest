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
    <div class="clearfix"></div>
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
    <div class="clearfix"></div>
<hr>
    <section class="our-work" id="our-work">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">
                        المجالات والصناعات التي نعمل حالياً على تطوير برمجيات متقدمة لدعمها وحل مشكلاتها</span>
                    <h2>مجالات عملنا</h2>
                </div>
            </div>

            <div class="constent">
                <div class="text-conetent-see-more">
                    نقوم بإنشاء تطبيقات للشركات بالتعاون مع مالكيها ونهدف إلى تحقيق غاية وهدف عملائنا بشكل كامل، احتياجاتك، ومتطلباتك ونواياك هي ما يهمنا في عملية تطوير تطبيقات الأعمال.

                </div>
                <p class="click-more btn">see more</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-work-information">
                        <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-rocket fa-3x"></i></div>
                        <div class="plan-box text-center">
                            <h3>خدمات تطوير تطبيقات الأعمال</h3>
                            <p>
                                نقوم بإنشاء تطبيقات للشركات بالتعاون مع مالكيها ونهدف إلى تحقيق غاية وهدف عملائنا بشكل كامل، احتياجاتك، ومتطلباتك ونواياك هي ما يهمنا في عملية تطوير تطبيقات الأعمال.
                            </p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="our-work-information ">
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-store fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>تمكين المبيعات</h3>
                          <div class="information-box">
                              <p class="catch">
                              أي مشروع رقمي تواجهه تحديات تحتاج إلى معالجة لضمان التنفيذ القوي،  نحن في ديفيست سنساعدك في مواجهة جميع تحديات لعبة المبيعات
                          </p>
                          </div>
                      </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="our-work-information ">
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-database fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>التطوير البرمجي</h3>
                          <div class="information-box">
                              <p class="catch">
                                  نقدم لك المنتجات البرمجية بالطريقة التي تريدها, وننشئ لك منتجات رقمية تساعدك في اجتياز كل المشكلات التي ستواجهك في اللعبة الرقمية.
                              </p>
                              <p class="text-box ">
                                  نصمم لك المشروع الرقمي الذي يناسب شركتك كما نساعدك على إيجاد حلول برمجية مناسبة لإنقاذ مشروعك،
                              </p>
                                  <div class="see-more btn btn-info"> اقرأ المزيد</div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-work-information ">
                        <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-tasks fa-3x"></i></div>
                        <div class="plan-box text-center">
                            <h3>استشارات إدارية</h3>
                            <div class="information-box">
                                <p class="catch">
                                مهمتنا هي تمكينك من فتح باب يطل على المستقبل الرقمي لكي تنقل عالمك التجاري نحوه،
                                نقدم لك خدمات استشارية في مجالات: التخطيط والاستراتيجيات،
                                التحول الرقمي، النمو، الابتكار،
                            </p>
                                <p class="text-box ">

                                     وإدارة دورة حياة المنتج والعمليات الخاصة به،
                                      وإدارة سلسلة التجهيز كما نقوم بإعداد نماذج الأعمال التجارية عن طريق استخدام المنهجيات الحديثة مثل: Lean Startup و Agile لتعظيم
                                       فرصك في لعبة الأعمال التجارية
                                </p>
                                    <div class="see-more btn btn-info"> اقرأ المزيد</div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="our-work-information ">
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-tablet-alt fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3> تطوير تطبيقات الجوال</h3>
                          <div class="information-box">
                              <p class="catch">
                              نقوم ببرمجة وتطوير جميع مشاريع الأجهزة الجوالة، بمختلف المقاييس والتعقيد بدءًا من تطبيقات الشركات إلى تطبيقات الجوال المستقلة.
                          </p>
                              <p class="text-box ">
                                  سنساعدك للوصول إلى جمهور الجوال المناسب لك من الفكرة الأولية إلى تصميم المنتج النهائي، يوفر فريق التطوير بشركة ديفيست تطبيقات مخصصة للهاتف الجوال تلبي معاييرك وتساعد عملك على البقاء عل ى اتصال باللعبة الرقمية،
                                  ومع مستوى الابتكار والجودة الذي نضعه في كل تطبيق من تطبيقاتنا يمكننا تعزيز علاقتك بعميلك، وتحسين تجربة المستخدم الشاملة على أجهزتهم الجوالة.
                              </p>
                                  <div class="see-more btn btn-info"> اقرأ المزيد</div>
                          </div>
                      </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="our-work-information ">
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-shopping-basket  fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>  برمجة المواقع والمتاجر الالكترونية</h3>
                          <div class="information-box">
                              <p class="catch">
                              أطلق عنان مشروعك أو تجارتك لقوة الويب، اترك معنا أفضل أول انطباع لدى عميلك سنجعلك تظهر بشكل محترف على شاشة الكومبيوتر،
                          </p>
                              <p class="text-box ">
                                  حيث نقوم بمواءمة مواهب وخبرات فريق ديفيست لإنشاء مواقع ومتاجر الكترونية تفاعلية فريدة من نوعها لتلبية أهداف عملك، حيث نقوم بمزج أفكار التصميم المبتكرة مع المفاهيم المعترف بها على نطاق واسع، ديفيست ستجعلك سيد اللعبة وستجعل منتجاتك وخدماتك متاحة للملايين.            </p>
                                  <div class="see-more btn btn-info"> اقرأ المزيد</div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-work-information ">
                        <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-copyright fa-3x"></i></div>
                        <div class="plan-box text-center">
                            <h3>نصمم هوية تجارية كاملة لك</h3>
                            <div class="information-box">
                                <p class="catch">
                                نقوم بتصميم العلامات التجارية للشركات بعناية
                                لأن علامتك التجارية هي الانطباع الذي تتركه شركتك في أذهان عملائك الحاليين والمحتملين والموظفين أيضًا،
                            </p>
                                <p class="text-box ">
                                    ولأنها توضح رؤيتك، هويتك، وأهدافك.
                                    تساعد ديفيست الشركات على الظهور لعملائها بأفضل هوية بصرية ممكنة ولأجل ذلك لدينا فريق عمل مختص ومحترف من المصممين لنجعلك تظهر بأفضل شكل ممكن لنجعلك تتميز بين منافسينك في اللعبة الرقمية.
                                </p>
                                    <div class="see-more btn btn-info"> اقرأ المزيد</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-work-information ">
                        <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fab fa-sketch fa-3x"></i></div>
                        <div class="plan-box text-center">
                            <h3>تصاميم مبتكرة</h3>
                            <div class="information-box">
                            <p class="catch">
                                لأن التصاميم هي اللغة البصرية التي تنقل شخصية شركتك إلى عالم متسع من العملاء المحتملين قبل أن تقابلهم.
                            </p>
                                <p class="text-box ">
                                    وتلهم الأشخاص للعمل معك من الانطباع الأول لاحترافية تصاميم شركتك،
                                    يعمل المصممون الموهوبون لدينا معك لفهم طبيعة عملك وفهم الرسالة التي تحتاج أن تعبر عنها، من خلال تطبيق نظرية الألوان والتكوين والتخطيط والمنظور بمهارة، في النهاية سنبتكر لك صورة لها تأثير فوري وقوة بقاء لا تُمحى.
                                </p>
                                    <div class="see-more btn btn-info"> اقرأ المزيد</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-work-information ">
                        <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-users fa-3x"></i></div>
                        <div class="plan-box text-center">
                            <h3>التسويق عبر مواقع التواصل الاجتماعي</h3>
                            <div class="information-box">
                                <p class="catch">
                                لتحقيق أهدافك التجارية، نساعدك في التسويق عبر مواقع التواصل الاجتماعي عن طريق:
                                -اعداد خططك التسويقية بشكل متكامل
                            </p>
                                <p class="text-box ">
                                    -نحلل منافسينك
                                    -نصل لأفضل عملائك المحتملين عن طريق جمهور مستهدف مناسب لعملك
                                    -نصمم لك تصميمات مبتكرة
                                    -ندير حملاتك الإعلانية الممولة بشكل كامل، ونحلل نتائجها بشكل دوري
                                    -نكتب المحتوى المناسب لجمهورك المستهدف.
                                </p>
                                    <div class="see-more btn btn-info"> اقرأ المزيد</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6">
                    <div class="our-work-information ">
                        <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-search-location fa-3x search-icon"></i></div>
                        <div class="plan-box text-center">
                            <h3>التسويق عبر محركات البحث وتحسين نتائجها (SEO and SEM)</h3>
                            <div class="information-box">
                                <p class="catch">
                                لدينا خبرة ومعرفة قوية لجميع المعايير التي تستخدمها المحركات الرئيسية مثل Google و Bing لتصنيف مواقع الويب، حيث نبقى على اطلاع دائم بجميع تحديثات وتعديلات القواعد.
                                لن نضمن لك الترتيب لأن لا أحد يستطيع ذلك،
                                ولكن ما سنفعله هو مساعدتك في
                                إنشاء محتوى الويب الخاص بك
                                وتنظيمه وتحسينه
                                    بحيث تكون مرئيًا عندما يكون الأمر مهمًا (عندما يبحث عملاؤك المحتملون عن الخدمات التي تقدمها)
                                    تحسين محركات البحث الفعال ليس سحرًا.
                                    إنها معرفة كيفية عمل خوارزميات محركات البحث والاستفادة من المحتوى الخاص بك
                                    لجذب جمهورك المستهدف.
                                    حيث يعد تسويق المحتوى ضروريًا جدًا لدفع عملك إلى الأمام، المحتوى الجيد يؤدي إلى جعل الكلمات الافتتاحية تتصدر محركات البحث وتعمل جنبًا إلى جنب مع تقنيات تحسين محرك البحث الذكي (SEO).
                                    وهذا ما سيساعد شركتك على توليد عملاء محتملين، وتنمية جمهورك على وسائل التواصل الاجتماعي، وإبقائك في صدارة منافسيك داخل اللعبة.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </>
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
                <div class="block-7 scale-box">
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
                <div class="block-7 scale-box">
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
                <div class="block-7 scale-box">
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
    <div class="clearfix"></div>
<section class="ftco-section testimony-section bg-light " id="testmonails">
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
    <div class="clearfix"></div>
<hr>
    {{--begin Our support--}}
    <section class="our-supports" id="supports">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">شركاءنا فى النجاح</span>
                    <h2 class="mb-3">شركائنا</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Set up your HTML -->
                    <div class="carousel-support owl-carousel">
                        <div class="item marsol"><img src="{{asset('assests/front/images/supports/tafra.png')}}" alt=""> </div>
                        <div class="item mcit"><img src="{{asset('assests/front/images/supports/mars.png')}}" alt=""> </div>
                        <div class="item altafrah"><img src="{{asset('assests/front/images/supports/hunger.png')}}" alt=""> </div>
                        <div class="item saudi"><img src="{{asset('assests/front/images/supports/elctra.png')}}" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--End Our support--}}
    <hr>
    <div class="clearfix"></div>
    <section class="contact" id="contact">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">تواصل معنا</h2>
                <span class="subheading">اترك لنا رسالة وسوف نقوم بالرد عليك بأسرع وقت ممكن</span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <dive class="col-md-9 col-sm-12">
                    @include('front.messages.session')
                    <form method="POST" action="{{route('admin.mail.store')}}" class="bg-light p-5 contact-form">
                      @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control name" placeholder="الاسم " required maxlength="100">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-danger error">هذا الحقل ييجب ان يزيد عن خمسة احرف</div>
                                    <div class="alert alert-danger more-than">هذا الحقل ييجب ان لا يزيد عن ثلاثون حرفا </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control email" placeholder="الاميل الخاص بك" required maxlength="100">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-danger error">هذا الحقل ييجب ان يزيد عن خمسة احرف</div>
                                    <div class="alert alert-danger more-than">هذا الحقل ييجب ان لا يزيد عن ثلاثون حرفا </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control subject" placeholder="الموضوع" required maxlength="100">
                                    @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-danger error">هذا الحقل ييجب ان يزيد عن خمسة احرف</div>
                                    <div class="alert alert-danger more-than">هذا الحقل ييجب ان لا يزيد عن ثلاثون حرفا </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control phone" placeholder="رقم الهاتف" required  onKeyPress="if(this.value.length==19) return false;">
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-danger error">هذا الحقل ييجب ان يزيد عن خمسة احرف</div>
                                    <div class="alert alert-danger more-than">هذا الحقل ييجب ان لا يزيد عن ثلاثون حرفا </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea required name="messages" id=""  cols="30" rows="5" class="form-control messages" minlength="15" maxlength="500" placeholder="الرساله"></textarea>
                            @error('messages')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="alert alert-danger error">هذا الحقل ييجب ان يزيد عن عشرة احرف</div>
                            <div class="alert alert-danger more-than">هذا الحقل ييجب ان لا يزيد عن مائة حرفا </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="submit btn btn-danger py-2 px-5 message"> إرسال الرسالة <i class="fas fa-arrow-left"></i> </button>
                        </div>
                    </form>
                </dive>
                <dive class="col-md-3 col-sm-12 text-right">
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
