<!doctype html>
<html lang="en">
        
<head>    
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link type="image/x-icon" href="https://www.pingidentity.com/etc.clientlibs/settings/wcm/designs/pic6/assets/resources/images/favicon-new.png" rel="shortcut icon">
  <title>Healthcare</title>
</head>
  
<body>
  
  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6e7578;">
    <a class="navbar-brand mb-1" href="https://www.health.demoenvi.com/">
      <img src="https://www.pingidentity.com/content/dam/ping-6-2-assets/topnav-json-configs/Ping-Logo-Footer.svg" height="50" alt="">
    </a>    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mt-4">
        <li class="nav-item">
          <a class="nav-link" href="/">Provider Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://apps.pingone.com/0f0b053c-7fc1-4cf4-a450-02846518a253/myaccount/" target="_blank">My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/patient/">Patient Chart</a>
        </li>
      </ul>
      <ul class="navbar-nav text-right mt-4">
        <li class="nav-item mr-2">
          <a class="btn btn-outline-light btn d-none" id="logoutButton" href="/logout/">Logout</a>
        </li>
        <li class="nav-item mr-2">
          <a class="btn btn-outline-warning btn d-none" id="signOnButton" onclick="doLogin();" href="#">Login</a>
        &nbsp;&nbsp;
      </ul>
    </div>
  </nav>
  <!-- /navigation -->

    <div class="container">
      <section class="testimonials">

        <div class="jumbotron">
          <h1 class="display-4">Welcome</h1>
          <p class="lead">We are glad that you chose to visit today.</p>
        </div>

        <div class="alert alert-primary collapse" role="alert" id="accessTokenDiv">
          <pre>

<?php

  $epicUUID = $_SERVER['HTTP_EPIC_UUID'];

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://int-dg.anyhealth-demo.ping-eng.com:8443/epic/Patient/TUKRxL29bxE9lyAcdTIyrWC6Ln5gZ-z7CLr2r-2SY964B",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Accept: application/json",
      "Authorization: Bearer { \"iss\": \"AnyHealth\", \"aud\": \"EpicFHIR\", \"client_id\": \"PatientPortal\", \"sub\": \"1eaed605-c824-477a-a2ce-9c2a160c170c\", \"active\": true, \"scope\": \"pd:consents:unpriv\" }"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  if($err) {
    echo "cURL Error #:" . $err . "\n";
  }

  curl_close($curl);
  
  $responseData = json_decode($response);
  $response = json_encode($responseData, JSON_PRETTY_PRINT);
  echo $response;
?>


          </pre>
        </div>

      </section>
    </div>

  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />

  <!-- footer -->
  <nav class="navbar navbar-light bg-light mt-5">
    <div class="container">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="memberTools" href="https://patient.health.demoenvi.com">Member login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Center</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Patient Bill of Rights</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Privacy Statement</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /footer -->

  </div>
  <!-- /page container -->

  <!-- jquery and bootstrap js libraries -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- JavaScript Cookie plugin -->
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

  <!-- local javascript functions -->
  <script src="/js/auth.js"></script>

  <script>

    // begin process

    $(document).ready(function () {
      console.log("Page ready function");

      // determine if user is already signed in, and show appropriate login/logout buttons

  if (Cookies.get('accessToken', { domain: cookieDomain })) {
    $('#preferencesButton').removeClass('d-none');
    $('#logoutButton').removeClass('d-none');
  } else {
    $('#signOnButton').removeClass('d-none');
  }

      // show access token if user is logged in

      if (Cookies.get('accessToken', { domain: cookieDomain })) {

        $("#accessTokenDiv").show();
        $("#accessTokenCode").text(Cookies.get('accessToken', { domain: cookieDomain }));

      }


      if (Cookies.get('idToken', { domain: cookieDomain })) {

        $("#idTokenDiv").show();
        $("#idTokenCode").text(Cookies.get('idToken', { domain: cookieDomain }));

      }

    });
  </script>


</body>

</html>

