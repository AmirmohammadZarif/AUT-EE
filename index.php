<?php
include_once './header.php';
?>
<main data-bs-spy="scroll" data-bs-target="#main-nav" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="container">

    <div id="hero" class="p-4 p-lg-5 mt-5 mb-4 rounded text-bg-dark">
        <div class="col-lg-6 px-0 p-lg-5">
            <h1 class="display-4 fw-bold">از من بپرس!</h1>
            <h2 class="lead my-3">دانشکده مهندسی برق دانشگاه صنعتی امیرکبیر (پلی تکنیک تهران)</h2>
        </div>
    </div>
    <br>

    <div id="quick-access" class="row g-0 mb-2">
        <div class="col p-4 shadow-sm rounded box-border">
            <div class="row g-0 overflow-hidden mb-4 h-md-250 position-relative" style="overflow: visible!important;">
                <div class="d-flex">
                    <i class="fa-duotone fa-square-arrow-up-right d-inline float-right fa-2x text-primary me-2"></i>
                    <h3 class="title-text d-inline-block mb-2 d-inline text-dark">دسترسی سریع</h3>
                </div>

                <div class="row mt-4 row-cols-2 row-cols-lg-6 g-3 g-lg-3">
                    <div class="col">
                        <a class="c-link" href="#dean">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-user fa-2x accent"></i>
                                    <h6 class="mt-3 accent">دفتر رئیس دانشکده</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="#education">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-books fa-2x accent"></i>
                                    <h6 class="mt-3 accent">دفتر آموزش</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="#graduate">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-graduation-cap fa-2x accent"></i>
                                    <h6 class="mt-3 accent">دفتر تحصیلات تکمیلی</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="#faculty">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-user-group fa-2x accent"></i>
                                    <h6 class="mt-3 accent">اتاق اساتید</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="#labs">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-wave-pulse fa-2x accent"></i>
                                    <h6 class="mt-3 accent">آزمایشگاه ها</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="#contact-us">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-phone fa-2x accent"></i>
                                    <h6 class="mt-3 accent">تماس با ما</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div id="dean" class="row g-0 mb-2 mt-5">
        <div class="col p-4 shadow-sm rounded bg-light">
            <div class="row g-0 overflow-hidden mb-4 h-md-250 position-relative" style="overflow: visible!important;">
                <div class="d-flex mb-4 align-middle">
                    <i class="fa-duotone fa-circle-info d-inline float-right fa-2x text-primary me-2"></i>
                    <h3 class="title-text d-inline-block mb-2 d-inline text-dark">دفتر رئیس دانشکده</h3>
                </div>

                <div class="row">
                    <div class="d-flex align-middle mb-4">
                        <i class="fa-duotone fa-calendar-clock d-inline float-right fa text-dark me-2"></i>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-bold me-1">روز های حضور در دفتر:</p>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-normal">شنبه تا چهارشنبه در ساعات اداری</p>
                    </div>
                    <h5 class="mb-3">کارشناسان دفتر ریاست در طبقه هشتم ابوریحان</h5>
                    <div class="card p-0">
                        <div class="card-bodys g-0 p-0">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">نام و نام خانوادگی</th>
                                        <th scope="col">شماره تماس</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>خانم ثریا رنجبر</td>
                                        <td>۶۴۵۴۳۳۰۰</td>
                                    </tr>
                                    <tr>
                                        <td>خانم طاهره بنایی</td>
                                        <td>۶۴۵۴۳۳۰۱</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?include 'dean.php';?>
    
</main>

<?php
include_once './footer.php';
?>