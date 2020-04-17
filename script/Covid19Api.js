const apiUrl = "https://api.covid19api.com/summary";
async function getData() {
  const response = await fetch(apiUrl);
  const data = await response.json();
  var NewConfirmed = "<td>" + data.Global.NewConfirmed + "</td>";
  var NewDeaths = "<td>" + data.Global.NewDeaths + "</td>";
  var NewRecovered = "<td>" + data.Global.NewRecovered + "</td>";
  var TotalConfirmed = "<td>" + data.Global.TotalConfirmed + "</td>";
  var TotalDeaths = "<td>" + data.Global.TotalDeaths + "</td>";
  var TotalRecovered = "<td>" + data.Global.TotalRecovered + "</td>";
  var ResultDiv =
    "<tr><th scope='row'>" +
    "Global" +
    "</th>" +
    NewConfirmed +
    NewDeaths +
    NewRecovered +
    TotalConfirmed +
    TotalDeaths +
    TotalRecovered +
    "</tr>";
  document.getElementById("CovidResult").innerHTML = ResultDiv;
  console.log(data);
}
