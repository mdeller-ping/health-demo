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
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
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
          <a class="nav-link" href="/">Patient Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/debug/">Headers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chart/">My Chart</a>
        </li>
<?php if ($_SERVER['HTTP_PROFILE_SUBSCRIBER_TYPE'] == 'patient') { ?>
        <li class="nav-item">
          <a class="nav-link" href="/consents/">My Consents</a>
        </li>
<?php } ?>
      </ul>
      <ul class="navbar-nav text-right mt-4">
        <li class="nav-item mr-2">
          <a class="btn btn-outline-primary btn" href="https://pa.health.demoenvi.com/pa/oidc/logout">Logout <?php echo $_SERVER['HTTP_PROFILE_FIRSTNAME']; ?></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /navigation -->

  <!-- hero banner -->
  <div class="jumbotron jumbotron-fluid mb-n1">
    <div class="container">
      <h1 class="display-4">Your Chart</h1>
      <p class="lead">Your health is always our top priority. We’re taking extra steps to deliver the safest care possible, including screening all patients and team members, wearing appropriate PPE and the using highest level of disinfectant processes throughout our facilities and more.</p>
    </div>
  </div>
  <!-- /hero banner -->

  <div class="container mt-5">
    <p class="lead">Viverra vitae congue eu consequat ac. Nam libero justo laoreet sit. Malesuada proin libero nunc
      consequat
      interdum varius sit. Facilisi morbi tempus iaculis urna id. Sed arcu non odio euismod lacinia at quis risus.
      Molestie at elementum eu facilisis. Justo donec enim diam vulputate ut. Duis ut diam quam nulla porttitor massa.
      Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Et odio pellentesque diam volutpat. Non
      quam lacus suspendisse faucibus interdum. Nunc lobortis mattis aliquam faucibus purus in massa. Sagittis id
      consectetur purus ut faucibus pulvinar.</p>
  </div>

  <!-- footer -->
  <nav class="navbar navbar-light bg-light mt-5">
    <div class="container">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="https://patient.health.demoenvi.com/registration/">Sign up</a>
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

  <script>
    function toggleRaw() {
      $('#rawDiv').toggle();
    }
  </script>
</body>

</html>

