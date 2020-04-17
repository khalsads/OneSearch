<?php require_once('master_layout/header.php')?>
    <section class="UserHome" id="UserHome">
      <div class="ResultCOntainer container-fluid p-3" id="ResultContainer">
        <div class="container-fluid p-2 my-1 bg-dark text-white">
          <h1>COVID 19 Latest News</h1>
          <p>
            Here You will Get Updated New About COVID 19 and the current
            Situation in the world.
          </p>
        </div>
        <div id="CovidResultContainer" class="my-3 bg-light">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Status</th>
                <th scope="col">New Confirmed</th>
                <th scope="col">New Deaths</th>
                <th scope="col">New Recovered</th>
                <th scope="col">Total Confirmed</th>
                <th scope="col">Total Deaths</th>
                <th scope="col">Total Recovered</th>
              </tr>
            </thead>
            <tbody id="CovidResult"></tbody>
          </table>
        </div>
        <div class="SearchResult row row-cols-3" id="SerchResult"></div>

      </div>
    </section>
    <script src="script/Covid19Api.js"></script>
    <script src="script/youTubeApi.js"></script>
    <?php require_once('master_layout/footer.php')?>