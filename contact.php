<?php require_once('master_layout/header.php') ?>
<section id="Contact" class="container-fluid bg-light">
  <h2 class="text-center mb-5">Contact</h2>
  <div class="row d-flex align-items-center">
    <div class="col-5">
    <div
      id="ContactFormContainer"
      class="border rounded-lg shadow bg-white"
    >
      <form action="" id="ContactForm" class="pt-5 px-3">
        <div class="row">
          <div class="col-6 ml-1">
            <label for="Name" class="d-none">Name</label>
            <input
              type="text"
              class="form-control border rounded px-3"
              placeholder="Name"
              name="Name"
              id="Name"
            />
          </div>
          <div class="col-5 ml-4">
            <label for="Email" class="d-none"></label>
            <input
              type="text"
              class="form-control border rounded px-3"
              placeholder="Email"
              id="Email"
              name="Email"
            />
          </div>
        </div>
        <div class="row">
          <label for="comments" id="CommentLabel" class="d-none"></label>
          <textarea
            class="form-control"
            id="comments"
            name="comments"
            placeholder="Comment"
            rows="5"
          ></textarea>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
    </div>
    <div class="col-7 pl-5">
      <div id="googleMap" class="LocationMap border rounded-lg"></div>
    </div>
    <script src="script/GoogleMapApi.js" async defer></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtcgzsvKiW2ogihYlW8PS0wgpZfD5_R2Q&callback=myMap"></script>
</section>
<?php require_once('master_layout/footer.php')?>
