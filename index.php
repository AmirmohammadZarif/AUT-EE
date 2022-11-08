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
                        <a class="c-link" href="?section=dean#quick-access">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-user fa-2x accent"></i>
                                    <h6 class="mt-3 accent">دفتر رئیس دانشکده</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="?section=education#quick-access">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-books fa-2x accent"></i>
                                    <h6 class="mt-3 accent">دفتر آموزش</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="?section=graduate#quick-access">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-graduation-cap fa-2x accent"></i>
                                    <h6 class="mt-3 accent">دفتر تحصیلات تکمیلی</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="?section=faculty#quick-access">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    <i class="fa-duotone fa-user-group fa-2x accent"></i>
                                    <h6 class="mt-3 accent">اتاق اساتید</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="c-link" href="?section=graduate#quick-access">
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

    <? include 'sections.php'; ?>
    <div id="contact-us" class="row g-0 mb-5 mt-5">
        <div class="col p-4 shadow-sm rounded bg-light">
            <div class="row g-0 overflow-hidden mb-4 h-md-250 position-relative" style="overflow: visible!important;">
                <div class="d-flex mb-4 align-middle">
                    <i class="fa-duotone fa-square-phone d-inline float-right fa-2x text-primary me-2"></i>
                    <h3 class="title-text d-inline-block mb-2 d-inline text-dark">تماس با ما</h3>
                </div>

                <div class="row">
                    <div class="d-flex align-middle mb-4">
                        <i class="fa-duotone fa-calendar-clock d-inline float-right fa text-dark me-2"></i>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-bold me-1">آدرس: </p>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-normal"> ایران - تهران - میدان ولیعصر - خیابان حافظ - پلاک ۳۵۰- ساختمان ابوریحان- طبقه هشتم- دفتر ریاست . صندوق پستی :۴۴۱۳-۱۵۸۷۵</p>
                    </div>
                    <div class="d-flex align-middle mb-4">
                        <i class="fa-duotone fa-envelope d-inline float-right fa text-dark me-2"></i>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-bold me-1">پست الکترونیک: </p>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-normal">office.ee@aut.ac.ir</p>
                    </div>
                    <div class="d-flex align-middle mb-4">
                        <i class="fa-duotone fa-phone d-inline float-right fa text-dark me-2"></i>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-bold me-1">تلفن: </p>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-normal">۶۴۵۴۳۳۰۰(۲۱)۹۸+ - ۶۴۵۴۳۳۰۱(۲۱)۹۸+</p>
                    </div>
                    <div class="d-flex align-middle mb-4">
                        <i class="fa-duotone fa-fax d-inline float-right fa text-dark me-2"></i>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-bold me-1">دورنگار: </p>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-normal">۶۶۴۹۰۵۸۱(۲۱)۹۸+- ۶۶۴۰۶۴۶۹(۲۱)۹۸+</p>
                    </div>
                    <div class="d-flex align-middle mb-4">
                        <i class="fa-duotone fa-mailbox d-inline float-right fa text-dark me-2"></i>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-bold me-1">کدپستی: </p>
                        <p class="title-text d-inline-block mb-2 d-inline text-dark fw-normal">۱۵۹۱۶۳۴۳۱۱</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once './footer.php';
?>