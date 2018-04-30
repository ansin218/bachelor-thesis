<?php 
  $title = 'Smart Home | Control Devices';
  include $_SERVER["DOCUMENT_ROOT"].'/home/core/init.php';
  f_protect_page();
  include $_SERVER["DOCUMENT_ROOT"].'/home/includes/overall/header.php';

?>

  <div class="page-content">
    <div class="content">
      <div class="row" >
        <div class="col-lg-4">
        <!-- Something -->
        </div>
        <div class="col-lg-4 ">
          <h1 style="font-size: 250%; text-align: center">Control Devices</h1><br/><br/>
          <fieldset id="kRoom">
          <p style="font-size: 150%; text-align: center" >Appliance 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="son" class="btn btn-success">ON</button>&nbsp;&nbsp;<button value="soff" class="btn btn-danger">OFF</button></p><BR><BR>
          <p style="font-size: 150%; text-align: center">Appliance 2 &nbsp;&nbsp;&nbsp;<button value="von" class="btn btn-success">ON</button>&nbsp;&nbsp;<button value="voff" class="btn btn-danger">OFF</button></p> <BR><BR>
          <br/><div class="alert alert-success alert-dismissable" align="center"><div id="command-output"></div></div>
          </fieldset>
        </div>
        <div class="col-lg-4">
        <!-- Something -->
        </div>
  	  </div>
    </div>
  </div>

<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>

<script src="assets/js/core.js" type="text/javascript"></script>

<script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });
</script>

<?php

  include $_SERVER["DOCUMENT_ROOT"].'/swift/includes/overall/footer.php';

?>
