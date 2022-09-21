<?php
include_once './header.php';
?>
<main class="container">

    <div id="carouselExampleSlidesOnly" class="carousel slide mx-auto mt-5" data-bs-ride="carousel">
        <div class="carousel-inner rounded-3 shadow" style="max-height:400px;">
            <div class="carousel-item active">
                <img src="./assets/images/ee.jpeg" class="d-block w-100 " style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="./assets/images/aut2.jpeg" class="d-block w-100">
            </div>
        </div>
    </div>

    <div id="hero" class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>
    <br>

    <div class="row g-0 mb-2">
        <div class="col p-4 shadow-sm rounded">
            <div class="row g-0 overflow-hidden mb-4 h-md-250 position-relative" style="overflow: visible!important;">
                <h3 class="title-text d-inline-block mb-2">دسترسی سریع</ا>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="card text-center border-0 c-box text-dark">
                                <div class="card-body">
                                    This is some text within a card body.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    This is some text within a card body.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    This is some text within a card body.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    This is some text within a card body.
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                </div>
            </div>
        </div>
    </div>
</main>
<?php
include_once './footer.php';
?>