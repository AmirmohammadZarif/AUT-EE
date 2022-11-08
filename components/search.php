<div id="search-overlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="بستن جستجو"><i class="fa-duotone fa-close d-inline float-right fa text-dark me-2"></i></span>
    <div class="overlay-content">
        <input id="searchbox" onkeyup="search()" type="text" placeholder="جستجو برای ..." name="search">
    </div>

    <iframe id="search-results" allowtransparency = "true" src="<?echo $base_url;?>/components/results.php?keyword=23" height="200" width="300"></iframe>

</div>