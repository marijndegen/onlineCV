<!-- Start qualification Area -->
<section class="qualification-area pb-60" id="qualification-area">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-20 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">{{ trans('index.carreerSoFar') }}</h1>
                    <p>{{ trans('index.carreerSoFarQuote') }}</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 qty-left">
                <div class="single-qly">
                    <h3 class="text-uppercase">{{ trans('index.schoolItem1') }}</h3>
                    <p>{{ trans('index.schoolItem1Date') }}</p>
                    <h4 class="pt-20 pb-20">{{ trans('index.schoolItem1Title') }}</h4>
                    <p>
                        {{ trans('index.schoolItem1Desciption') }}
                    </p>
                </div>
                <div class="btm-border d-block mx-auto"></div>
                <div class="single-qly">
                    <h3 class="text-uppercase">{{ trans('index.schoolItem2') }}</h3>
                    <p>{{ trans('index.schoolItem2Date') }}</p>
                    <h4 class="pt-20 pb-20">{{ trans('index.schoolItem2Title') }}</h4>
                    <p>
                        {{ trans('index.schoolItem2Desciption') }}
                    <ol>
                        <li>{{ trans('index.schoolItem2OL1') }}</li>
                        <li>{{ trans('index.schoolItem2OL2') }}</li>
                        <li>{{ trans('index.schoolItem2OL3') }}</li>
                    </ol>
                    </p>
                </div>
            </div>



            <div class="col-lg-6 col-md-6 qty-right">

                <?php
                $itemsToShow = 3;
                ?>
                @for($i = 6 ; $i > 0; $i--, $itemsToShow--)

                @if($itemsToShow == 0 && !$pdfView)
                <div class="collapse" id="collapseEmployees">
                    <!-- This is to mark the end section for the employees, not to overlow the pag -->
                    @endif

                    <div class="single-qly">
                        <h4 class="pb-20">{{ trans("index.internShipItem{$i}") }}</h4>
                        <p><b>{{ trans('index.county') }}</b>: {{ trans("index.internShipItem{$i}Company") }}</p>
                        <p><b>{{ trans('index.date') }}</b>: {{ trans("index.internShipItem{$i}Date") }}</p>
                        <p><b>{{ trans('index.tasks') }}</b>: {{ trans("index.internShipItem{$i}Tasks") }}</p>
                    </div>
                    @endfor

                    {{--this is the div for the @if statement--}}

                    @if(!$pdfView)
                </div> <!-- this is the ending div for the collapseEmployees -->

                <div id="center-employee-button">
                    <button style="background-color: #007bff;" id="buttonWithText" class="btn btn-primary" onclick="switchName()" type="button" data-toggle="collapse" data-target="#collapseEmployees" aria-expanded="true" aria-controls="collapseEmployees">
                        {{ trans('index.showAllEmployers') }}
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- End qualification Area -->