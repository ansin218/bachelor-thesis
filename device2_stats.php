<?php 
  $title = 'Smart Home | Appliance 1 Statistics';
  include $_SERVER["DOCUMENT_ROOT"].'/home/core/init.php';
  f_protect_page();
  include $_SERVER["DOCUMENT_ROOT"].'/home/includes/overall/header.php';

?>

<div class="container">
    <div class="row">
    <center><h2>Statistics of Appliance 2</h2></center>
    <div class="col-lg-4">
    <!-- something -->
    </div>
    <div class="col-lg-4">
      <fieldset id="device2">
      <form class="form-horizontal" action="" method="GET">
        <div class="form-group">
          <div class="col-lg-12">
            <label class="control-label" for="focusedInput">From Date</label>
            <input type="text" class="form-control" name="from_date" id="from_date" required />
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
            <label class="control-label" for="focusedInput">To Date</label>
            <input  type="text" class="form-control" name="to_date" id="to_date" required />
          </div>
        </div><br/>
        <div class="form-group">
          <center><button type="submit" id="submit" value="submit" name="submit" class="btn btn-primary">Submit</button></center>
        </div>
      </fieldset>
      </form>
      </div>
      <div class="col-lg-4">
      <!-- something -->
      </div>
      </div>
      </div>

      <br/>

      <div class="container">
      <div class="row">
      <div class="col-lg-3">
      <!-- something -->
      </div>
      <div class="col-lg-6">
      <?php
      if(isset($_GET['from_date'])===true && isset($_GET['to_date'])===true) {
	
		$from = $_GET['from_date'];
		$to = $_GET['to_date'];
	
    	$query = "SELECT * FROM `light_year` WHERE `lsdate` BETWEEN '$from' AND '$to'";
    	
    	$result = mysql_query($query); ?>
    	<table class="table">
                  <thead>
                  <tr>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Duration</th>
                    <th>Units (KWH)</th>
                  </tr>
                  </thead>
    	          <tbody>
    	<?php while($row = mysql_fetch_assoc($result))
    	{ ?>
    		
    	          <td><?php echo $row['lsdate']; ?></td>
    	          <td><?php echo $row['lstime']; ?></td>
    	          <td><?php echo $row['letime']; ?></td>
    	          <td><?php echo $row['ldhour'].':'.$row['ldmin'].':'.$row['ldsec']; ?></td>
    	          <td><?php echo $row['units'].' '.'units'; ?></td>
    	          </tbody>
       <?php }
       $query1 = "SELECT SUM(`units`),SUM(`ldurs`) FROM `light_year` WHERE `lsdate` BETWEEN '$from' AND '$to'";
       $result1 = mysql_query($query1); 
       $row1=mysql_fetch_row($result1);
       echo '<center>Total units consumed for Appliance 1: '.'<strong>'.round($row1[0],2).'</strong> units</center><br/><br/>';
    }
       else {
          echo 'Enter valid dates to get the stats related power consumption of Appliance 1';
       }
       ?>
      </div>
      <div class="col-lg-3">
      <!-- something -->
      </div>
      </div>
      </div>