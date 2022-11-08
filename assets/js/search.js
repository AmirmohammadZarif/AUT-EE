let frameSrc = "https://avisengine.com/autee/v2/components/results.php";

function openSearch() {
  document.getElementById("search-overlay").style.opacity = 1;
  document.getElementById("search-overlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("search-overlay").style.opacity = 0;
  document.getElementById("search-overlay").style.display = "none";
}

function search() {
  var searchbox = document.getElementById("searchbox");
  document.getElementById('search-results').src = frameSrc + "?keyword=" + searchbox.value;
}
