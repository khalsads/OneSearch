//AN ONLOAD LISTENER
window.onload = PageLoader;
function PageLoader() {
  $(document).ready(function () {
    var SearchQuerry = "COVID 19";
    var APIKey = "AIzaSyDtcgzsvKiW2ogihYlW8PS0wgpZfD5_R2Q";
    var MaxResult = 5;

    $.get(
      "https://www.googleapis.com/youtube/v3/search",
      {
        part: "snippet",
        maxResults: MaxResult,
        q: SearchQuerry,
        type: "video",
        key: APIKey,
      },
      function (data) {
        $.each(data.items, function (i, item) {
          var VideoTitle = item.snippet.title;
          var VideoID = item.id.videoId;
          var VideoIframe =
            "<div class='embed-responsive embed-responsive-16by9' ><iframe class='embed-responsive-item py-2' src='https://www.youtube.com/embed/" +
            VideoID +
            "'></iframe></div>";
          SearchResult = "<div class='col'>" + VideoIframe + "</div>";
          document.getElementById("SerchResult").innerHTML += SearchResult;
        });
      }
    );
  });
  getData();
}
