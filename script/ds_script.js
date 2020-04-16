/* Function by google to retrieve profile information for a signed-in user */
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  document.getElementById("home_signin").className = "d-none";
  document.getElementById("home_signedin").className = "d-block";
  console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log("Name: " + profile.getName());
  console.log("Image URL: " + profile.getImageUrl());
  console.log("Email: " + profile.getEmail()); // This is null if the 'email' scope is not present.
}
/*  function that calls the GoogleAuth.signOut() */
function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function () {
    console.log("User signed out.");
  });
}
