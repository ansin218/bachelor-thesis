<?php 
  $title = 'Smart Home | MLE of Device 1';
  include $_SERVER["DOCUMENT_ROOT"].'/home/core/init.php';
  f_protect_page();
  include $_SERVER["DOCUMENT_ROOT"].'/home/includes/overall/header.php';

?>

<style>

#chart rect{
  fill: #4aaeea;
}

#chart text{
  fill: white;
  font: 10px sans-serif;
  text-anchor: end; 
}

.axis text{
  font: 10px sans-serif;
}

.axis path, .axis line{
  fill: none;
  stroke : #fff;
  shape-rendering: crispEdges;
}

body{
  background: #1a1a1a;
  color : #eaeaea;
  padding : 10px;
}
</style>

<h2><center>Likelihood Estimation of Appliance 1</center></h2><br/>
<div id="chart"></div> 

<script src="http://d3js.org/d3.v3.min.js"></script>
<script>

var margin ={top:20, right:30, bottom:30, left:40},
    width=1000-margin.left - margin.right, 
    height=600-margin.top-margin.bottom;

// scale to ordinal because x axis is not numerical
var x = d3.scale.ordinal().rangeRoundBands([0, width], .1);

//scale to numerical value by height
var y = d3.scale.linear().range([height, 0]);

var chart = d3.select("#chart")  
              .append("svg")  //append svg element inside #chart
              .attr("width", width+(2*margin.left)+margin.right)    //set width
              .attr("height", height+margin.top+margin.bottom);  //set height
var xAxis = d3.svg.axis()
              .scale(x)
              .orient("bottom");  //orient bottom because x-axis will appear below the bars

var yAxis = d3.svg.axis()
              .scale(y)
              .orient("left");

d3.json("device1_mle_json_enc.php", function(error, data){
  x.domain(data.map(function(d){ return d.fphour}));
  y.domain([0, d3.max(data, function(d){return d.fpprob})]);
  
  var bar = chart.selectAll("g")
                    .data(data)
                  .enter()
                    .append("g")
                    .attr("transform", function(d, i){
                      return "translate("+x(d.fphour)+", 0)";
                    });
  
  bar.append("rect")
      .attr("y", function(d) { 
        return y(d.fpprob); 
      })
      .attr("x", function(d,i){
        return x.rangeBand()+(margin.left/4);
      })
      .attr("height", function(d) { 
        return height - y(d.fpprob); 
      })
      .attr("width", x.rangeBand());  //set width base on range on ordinal data

  bar.append("text")
      .attr("x", x.rangeBand()+margin.left )
      .attr("y", function(d) { return y(d.fpprob) +5; })
      .attr("dy", ".75em")
      .text(function(d) { return d.fpprob; });
  
  chart.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate("+margin.left+","+ height+")")        
        .call(xAxis);
  
  chart.append("g")
        .attr("class", "y axis")
        .attr("transform", "translate("+margin.left+",0)")
        .call(yAxis)
        .append("text")
        .attr("transform", "rotate(-90)")
        .attr("y", 6)
        .attr("dy", ".71em")
        .style("text-anchor", "end")
        .text("Probability");
});

function type(d) {
    d.fpprob = +d.fpprob; // coerce to number
    return d;
  }

</script>

<?php

  include $_SERVER["DOCUMENT_ROOT"].'/swift/includes/overall/footer.php';

?>
