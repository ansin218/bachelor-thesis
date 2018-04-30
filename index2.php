<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
require "common/inc/header.php";
require "common/inc/status.php";
?>
<!-- BELOW CSS FILE IS NOT REQUIRED -->
<link href="assets/plugins/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>

<!-- END CSS TEMPLATE -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.0.2/jquery.simpleWeather.min.js"></script>
<script src="assets/plugins/skycons/skycons.js"></script>

 <script type="text/javascript">

$.get( "test.php", function( al ) {
   Messenger().post({
              message: al,
              type: 'success',
              showCloseButton: true
            });
});
</script>


 <script type="text/javascript">
      $(document).ready(function() {


        $('fieldset#kRoom button').click(function() {
          var buttonValue = $(this).attr('value');
          var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'alarm.mp3');
        audioElement.setAttribute('autoplay', 'autoplay');
        audioElement.load();
            if( buttonValue == "start" )
          {   
              
              Messenger().post({
              message: "Armed",
              type: 'success',
              showCloseButton: true
            }); }
          $.ajax({
              type: "POST",
              url: "common/scripts/command.php",
              data: "name=" + buttonValue
          }).done(function(data) {
            if ( data == "Alarm turned Off")
            {
                Messenger().post({
              message: data,
              type: 'error',
              showCloseButton: true
            }); 
            }
              if ( data == "Door Locked")
            {
                Messenger().post({
              message: data,
              type: 'error',
              showCloseButton: true
            }); 
            }
              if ( data == "Door Unlocked")
            {
                Messenger().post({
              message: data,
              type: 'success',
              showCloseButton: true
            }); 
            }
              if ( data == "Alarm turned On")
            {
                Messenger().post({
              message: data,
              type: 'success',
              showCloseButton: true
            }); 
            }
              if ( data == "Disarmed")
            {
                Messenger().post({
              message: data,
              type: 'error',
              showCloseButton: true
            }); 
            }
          
            });
        });
      });
    </script>




<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
<!-- BEGIN SIDEBAR -->

<!-- END SIDEBAR -->
<!-- BEGIN PAGE CONTAINER-->
<div class="page-content condensed">
  <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
  <div id="portlet-config" class="modal hide">
    <div class="modal-header">
      <button data-dismiss="modal" class="close" type="button"></button>
      <h3>Widget Settings</h3>
    </div>
    <div class="modal-body">INCSTRAP</div>
  </div>
  <div class="clearfix"></div>
  <div class="content sm-gutter">
    <div class="row" >
      <div class="col-md-6 col-vlg-4 col-sm-12 ">
       <h1>INCSTRAP</h1>
          <!-- BEGIN MARKET SALES WIDGET -->
          <div class="row tiles-container">
            <div class="col-md-9" >
                <div class="tiles white" style="height: 700px;">
                <div class="col-md-7 b-grey b-r no-padding" style="height:100%">
                  <div class="p-l-20 p-r-20 p-b-10 p-t-10 b-b b-grey">
                    <h5 class="text-success bold inline">Main Building</h5>
                    <h5 class="text-black bold inline m-l-10">DCE</h5>
                    <div class="alarm"> 
                      <h1 class="text-success bold inline no-margin"> <div id="all"></div> </h1>
                    </div>
                    <div class="clearfix"></div>
                  </div>
              <fieldset id="kRoom">
                         <div class="p-l-15 p-r-15 p-b-10 p-t-10 b-b b-grey">
                      <div class="pull-left">
                        <p class="small-text">ALARM</p>
                      </div>
                      <div class="pull-right">
                        <p class="small-text">DOOR</p>
                      </div>
                      <div class="clearfix"></div>
                      <div class="pull-left">
                      <button type="button" class="btn btn-success btn-xs btn-mini" value="alarmon">On</button>
                    <button type="button" class="btn btn-danger btn-xs btn-mini" value="alarmoff">Off</button>
                      </div>
                     <div class="pull-right" style="line-height: 27px;">
                               <button type="button" class="btn btn-danger btn-xs btn-mini" value="lock">Lock</button>
                    <button type="button" class="btn btn-success btn-xs btn-mini" value="unlock">Unlock</button>
                             </div>
                      <div class="clearfix"></div>
                        
                    </div>
                      
                  <div class="p-l-15 p-r-15 p-b-10 p-t-10 b-b b-grey">
                      <div class="pull-left">
                        <p class="small-text">SYSTEM</p>
                      </div>
                      <div class="pull-right">
                        <p class="small-text">LDR</p>
                      </div>
                      <div class="clearfix"></div>
                      <div class="pull-left">
                    <button type="button" class="btn btn-success btn-xs btn-mini" value="start">On</button>
                    <button type="button" class="btn btn-danger btn-xs btn-mini" value="stop">Off</button>
                      </div>
                     <div class="pull-right" style="line-height: 27px;">
                               <button type="button" class="btn btn-success btn-xs btn-mini" value="ldron">On</button>
                    <button type="button" class="btn btn-danger btn-xs btn-mini" value="ldroff">Off</button>
                             </div>
                      <div class="clearfix"></div>
                        
                    </div>
                          </fieldset>

                </div>
                <div class="col-md-5 no-padding full-height">
                  <div class="market-share-widget-innerscroller">
                     
                  <div data-height="100%" data-always-visible="1">
                 
                     <div class="p-l-15 p-r-15 p-b-10 p-t-10 b-b b-grey">
                      <div class="pull-left">
                        <p class="small-text">MOTION</p>
                      </div>
                      <div class="pull-right">
                        <p class="small-text">STATUS</p>
                      </div>
                      <div class="clearfix"></div>
                      <div class="pull-left">
                        <h4 class="semi-bold">Active</h4>
                      </div>
                      <div class="pull-right" style="line-height: 27px;">  <div id="mstatus"></div> </div>
                      <div class="clearfix"></div>
                    </div>
                    
                  
          
                     <div class="p-l-15 p-r-15 p-b-10 p-t-10 b-b b-grey">
                      <div class="pull-left">
                        <p class="small-text">TEMPERATURE</p>
                      </div>
                      <div class="pull-right">
                        <p class="small-text">STATUS</p>
                      </div>
                      <div class="clearfix"></div>
                      <div class="pull-left">
                        <h4 class="semi-bold">Active</h4>
                      </div>
                     <div class="pull-right" style="line-height: 27px;"> <div id="tstatus"></div> </div>
                      <div class="clearfix"></div>
                    </div>
       
   
                  </div>
                  </div>
                </div>
            </div>          
          </div>          
        </div>
      
        <!-- END MARKET SALES WIDGET -->

      
      </div>

        <!-- GALLERY -->

        
        <!-- NO GALLERY -->
      <!-- END DASHBOARD TILES -->
    </div>
 
  </div>
</div>

</div>
        
<!-- BEGIN CORE JS FRAMEWORK--> 

<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS -->  
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>

<!-- JS ONY FOR DEMO-->   
<script type="text/javascript" src="assets/plugins/jquery-notifications/js/demo/location-sel.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-notifications/js/demo/theme-sel.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-notifications/js/demo/demo.js"></script>

<script type="text/javascript" src="assets/js/notifications.js"></script>

<!-- END PAGE LEVEL PLUGINS -->   

<!-- BEGIN CORE TEMPLATE JS --> 
<!-- END CORE TEMPLATE JS -->   
           <?php

require "common/inc/footer.php"
?>
	
