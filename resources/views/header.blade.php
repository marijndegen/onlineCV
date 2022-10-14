<!-- start banner Area -->
<section class="banner-area" id="home">
    <!-- Start Header Area -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container" style="display:inline">
                <div style="display:inline">
                    <span>{{ trans('index.singleMail') }}: <a href="mailto:{{$email}}" target="_top">{{$email}}</a></span> ---
                    <span>{{ trans('index.singlePhone') }}:<a href="tel:{{$utel}}" target="_top">{{$tel}}</a></span>
                    <span style="width:350px; margin-left:20px;">
                        <a href="/nl"><img class="img-fluid" src="/img/flag_netherlands.png" alt=""></a>
                        <a href="/en"><img class="img-fluid" src="/img/flag_england.png" alt=""></a>
                    </span>
                </div>
            </div>

        </nav>
    </header>
    <!-- End Header Area -->
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-6 col-md-12 no-padding banner-right">
                <img class="img-fluid" src="/img/header-img.png" alt="">
            </div>
            <div class="col-lg-6 col-md-12 banner-left">
                <h1 class="text-white">
                    {{ trans('index.headerHello') }} <br>
                    <span>{{ trans('index.headerName') }}</span> <br>
                    {{ trans('index.headerIntro') }}
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->