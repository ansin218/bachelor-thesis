  <!-- Website Navigation Bar placed here -->

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand">Smart Home</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Statistics<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="device1_stats.php">Appliance 1</a></li>
                <li><a href="device2_stats.php">Appliance 2</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Time Series<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="device1_tsa.php">Appliance 1</a></li>
                <li><a href="device2_tsa.php">Appliance 2</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Likelihood<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="device1_mle.php">Appliance 1</a></li>
                <li><a href="device2_mle.php">Appliance 2</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Controls<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="home.php">Control Appliances</a></li>
              </ul>
            </li>
          </ul>
            
          </ul>
<?php 
    if(f_logged_in() === true) {
      include $_SERVER["DOCUMENT_ROOT"].'/home/includes/widgets/f-logout.php';
    } 
    else {
   include $_SERVER["DOCUMENT_ROOT"].'/home/includes/widgets/w-login.php';
}?> 
     