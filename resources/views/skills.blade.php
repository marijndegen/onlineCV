<!-- Start about Area -->
<section class="about-area section-gap" id="about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">{{ trans('index.aboutCareer') }}</h1>
                    <p class="italic-quote">{{ trans('index.aboutCareerQuote') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 about-left">
                <h4 class="pb-10">{{ trans('index.aboutCareerProgramming') }}</h4>
                <p>{{ trans('index.aboutCareerProgrammingDescription') }}</p>
                <div class="skillbar" data-percent="65%">
                    <div class="skill-bar-percent">Java 65%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 65%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="70%">
                    <div class="skill-bar-percent">Javascript 70%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 70%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="65%">
                    <div class="skill-bar-percent">Php 65%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 65%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="65%">
                    <div class="skill-bar-percent">Dart {{trans('index.with')}} flutter 65%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 65%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="65%">
                    <div class="skill-bar-percent">C# 65%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 65%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="60%">
                    <div class="skill-bar-percent">Mysql 60%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 60%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="25%">
                    <div class="skill-bar-percent">Mongodb 25%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 25%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="60%">
                    <div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingTesting') }} 60%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 60%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="30%">
                    <div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingCss') }} 30%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 30%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="75%">
                    <div class="skill-bar-percent">Git 75%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 75%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="65%">
                    <div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingNetworking') }} 65%</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 65%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="85%">
                    <div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingEnglish') }} C1</div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 85%;"></div>
                    </div>
                </div>

                <div class="skillbar" data-percent="38%">
                    <div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingGerman') }} B1 </div>
                    <div class="skillwrap">
                        <div class="skillbar-bar" style="width: 38%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about-right justify-content-end d-flex">
                <div class="myself-wrap">
                    <img class="img-fluid" src="/img/about-img.jpg" alt="">
                    <div class="desc">
                        <h4>{{ trans('index.cardName') }}</h4>
                        <p>{{ trans('index.cardTitle1') }}</p>
                        <p>{{ trans('index.cardTitle2') }}</p>
                        <p>{{ trans('index.cardTitle3') }}</p>

                        <p><span class="lnr lnr-phone"></span> <a href="tel:{{$utel}}" target="_top">{{$tel}}</a></p>
                        <p><span class="lnr lnr-envelope"></span> <a href="mailto:{{$email}}" target="_top">{{$email}}</a></p>
                        <p><span class="lnr lnr-pushpin"></span> Nijmegen</p>
                        <p><span class="lnr lnr-car"></span> {{ trans('index.cardTitle4') }} <ul><li>{{ trans('index.cardTitle4a') }}</li><li>{{ trans('index.cardTitle4b') }}</li></ul> </p>

                        <p><span class="lnr lnr-license"></span> {{ trans('index.cardTitle5') }}: <br> Cisco CCNA 1 <br> Cisco CCNA 2 <br> Cisco IT Essentials</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about Area -->