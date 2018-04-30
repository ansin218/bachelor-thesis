<?php 
  $title = 'Smart Home | TSA of Device 1';
  include $_SERVER["DOCUMENT_ROOT"].'/home/core/init.php';
  f_protect_page();
  include $_SERVER["DOCUMENT_ROOT"].'/home/includes/overall/header.php';

?>

<style> /* set the CSS */
body { font: 12px Arial;}
path {
stroke: steelblue;
stroke-width: 2;
fill: none;
}
.axis path,
.axis line {
fill: none;
stroke: grey;
stroke-width: 1;
shape-rendering: crispEdges;
} 
</style>
 
<script src="http://d3js.org/d3.v3.min.js"></script>
 
    <div class="container">
    <div class="row">
    <center><h2>Time Series Analysis of Appliance 1</h2></center><br/><br/>
    <div class="col-lg-4">
    <!-- something -->
    </div>
    <div class="col-lg-4">
      <fieldset id="device2">
        <div class="form-group">
          <div class="col-lg-12">
            <label class="control-label" for="focusedInput">From Date</label>
            <input type="text" class="form-control" name="from_date" id="from_date" required />
          </div>
        </div><br/><br/><br/>
        <div class="form-group">
          <div class="col-lg-12">
            <label class="control-label" for="focusedInput"><br/>To Date</label>
            <input  type="text" class="form-control" name="to_date" id="to_date" required />
          </div>
        </div><br/><br/><br/>
        <div class="form-group">
          <center><br/><br/><br/><button type="submit" id="submit" value="submit" onclick="myFunction()" name="submit" class="btn btn-primary">Submit</button></center>
        </div>
      </fieldset>
      </div>
      <div class="col-lg-4">
      <!-- something -->
      </div>
      </div>
      </div>

<div class="container">
<div class="row">
<div class="col-lg-2">
<!-- some data -->
</div>
<div class="col-lg-8">
<script type="text/javascript">

function myFunction() {
    var from_date= document.getElementById("from_date").value;; 
      var to_date= document.getElementById("to_date").value;;

 $.post("device1_tsa_json_enc.php",
    {
        fromdate: from_date,
        todate: to_date
    },
    function(datad, statuses){
    console.log(datad);
    d3.select("svg")
       .remove();
    
  // Set the dimensions of the canvas / graph
var margin = {top: 30, right: 20, bottom: 30, left: 50},
    width = 1280 - margin.left - margin.right,
    height = 768 - margin.top - margin.bottom;

// Parse the date / time
var parseDate = d3.time.format("%Y-%m-%d").parse;

// Set the ranges
var x = d3.time.scale().range([0, width]);
var y = d3.scale.linear().range([height, 0]);

// Define the axes
var xAxis = d3.svg.axis().scale(x)
    .orient("bottom").ticks(5);

var yAxis = d3.svg.axis().scale(y)
    .orient("left").ticks(5);

// Define the line
var valueline = d3.svg.line()
    .x(function(d) { return x(d.fsdate); })
    .y(function(d) { return y(d.units); });
    
// Adds the svg canvas
var svg = d3.select("body")
    .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
    .append("g")
        .attr("transform", 
              "translate(" + margin.left + "," + margin.top + ")");

// Get the data
d3.json("device1_tsa_json_results.json", function(error, data) {
    data.forEach(function(d) {
        d.fsdate = parseDate(d.fsdate);
        d.units = +d.units;
    });

    // Scale the range of the data
    x.domain(d3.extent(data, function(d) { return d.fsdate; }));
    y.domain([0, d3.max(data, function(d) { return d.units; })]);

    // Add the valueline path.
    svg.append("path")
        .attr("class", "line")
        .attr("d", valueline(data));

    svg.append("g")         // Add the X Axis
        .attr("class", "x axis")
        .attr("transform", "translate(0," + height + ")")
        .style("fill", "white")
        .call(xAxis);

    // Add the text label for the x axis
    svg.append("text")
        .attr("transform", "translate(" + (width / 2) + " ," + (height + margin.bottom) + ")")
        .style("text-anchor", "middle")
        .style("fill", "white")
        .text("X-Axis --> Date");

    svg.append("g")         // Add the Y Axis
        .attr("class", "y axis")
        .style("fill", "white")
        .call(yAxis);

    // Add the text label for the Y axis
    svg.append("text")
        .attr("transform", "rotate(-90)")
        .attr("y", 0 - margin.left)
        .attr("x",0 - (height / 2))
        .attr("dy", "1.5em")
        .style("text-anchor", "middle")
        .style("fill", "white")
        .text("Y-Axis --> Units (in KWH)");
});
     
});
}
</script>
</div>
<div class="col-lg-2">
<!-- some data -->
</div>
</div>
</div>
</div>
<?php

  include $_SERVER["DOCUMENT_ROOT"].'/swift/includes/overall/footer.php';

?>
