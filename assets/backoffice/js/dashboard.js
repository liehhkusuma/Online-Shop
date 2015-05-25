$(document).ready(function(){
	 
	 var plot = $.plot($("#basicflot"),
		[ { data: clientStat,
          label: "Client Statistic",
          color: "#1CAF9A"
        },
        { data: projectStat,
          label: "Project Statistic",
          color: "#D9534F"
        }
      ],
      {
		  series: {
			 lines: {
          show: true,
          fill: true,
          lineWidth: 1,
          fillColor: {
            colors: [ 
              { opacity: 0.5 },
              { opacity: 0.5 }
            ]
          }
        },
			 points: {
            show: true
          },
          shadowSize: 0
		  },
		  legend: {
        position: 'nw'
      },
		  grid: {
        hoverable: true,
        clickable: true,
        borderColor: '#ddd',
        borderWidth: 1,
        labelMargin: 10,
        backgroundColor: '#fff'
      },
		  yaxis: {
        tickDecimals : 0,
        min: 0,
        // max: 15,
        color: '#eee'
      },
      xaxis: {
        tickDecimals : 0,
        color: '#eee'
      }
		});

   function showTooltip(x, y, contents) {
    $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
      position: 'absolute',
      display: 'none',
      top: y + 10,
      left: x - 80
    }).appendTo("body").fadeIn(200);
   }
		
	 var previousPoint = null;
	 $("#basicflot").bind("plothover", function (event, pos, item) {
      $("#x").text(pos.x.toFixed(2));
      $("#y").text(pos.y.toFixed(2));
			
		if(item) {
		  if (previousPoint != item.dataIndex) {
			 previousPoint = item.dataIndex;
						
			 $("#tooltip").remove();
			 var x = item.datapoint[0],
			 y = item.datapoint[1];
	 			
			 showTooltip(item.pageX, item.pageY,
				  item.series.label + " of " + x + " = " + y);
		  }
			
		} else {
		  $("#tooltip").remove();
		  previousPoint = null;            
		}
		
	 });
		
	 $("#basicflot").bind("plotclick", function (event, pos, item) {
		if (item) {
		  plot.highlight(item.series, item.datapoint);
		}
	 });
  
  if(typeof Morris != "undefined"){
    // Donut Chart
    new Morris.Donut({
        element: 'donut-chart2',
        data: [
          {label: "Chrome", value: 30},
          {label: "Firefox", value: 20},
          {label: "Opera", value: 20},
          {label: "Safari", value: 20},
          {label: "Internet Explorer", value: 10}
        ],
        colors: ['#D9534F','#1CAF9A','#428BCA','#5BC0DE','#428BCA']
    });


    new Morris.Line({
      // ID of the element in which to draw the chart.
      element: 'line-chart',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
          { y: '2006', a: 50, b: 0 },
          { y: '2007', a: 60,  b: 25 },
          { y: '2008', a: 45,  b: 30 },
          { y: '2009', a: 40,  b: 20 },
          { y: '2010', a: 50,  b: 35 },
          { y: '2011', a: 60,  b: 50 },
          { y: '2012', a: 65, b: 55 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      gridTextColor: 'rgba(255,255,255,0.5)',
      lineColors: ['#fff', '#fdd2a4'],
      lineWidth: '2px',
      hideHover: 'always',
      smooth: false,
      grid: false
    });
  }
    
    $('#sparkline').sparkline([4,3,3,1,4,3,2,2,3,10,9,6], {
		  type: 'bar', 
		  height:'30px',
        barColor: '#428BCA'
    });
	
    
    $('#sparkline2').sparkline([9,8,8,6,9,10,6,5,6,3,4,2], {
		  type: 'bar', 
		  height:'30px',
        barColor: '#999'
    });
    
  if($.fn.dataTable){
    $('#table1').dataTable({
      "iDisplayLength": 5,
      "bLengthChange": false
    });
    
    // Chosen Select
    $("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
  }
    
});


// Chart Total expenditure
$(document).ready(function(){
   var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
   var plot = $.plot($("#basicflot2"),
    [ { data: PattyCashStat,
          label: "Total Expenditure",
          color: "#1CAF9A"
        }
      ],
      {
      series: {
       lines: {
          show: true,
          fill: true,
          lineWidth: 1,
          fillColor: {
            colors: [ 
              { opacity: 0.5 },
              { opacity: 0.5 }
            ]
          }
        },
       points: {
            show: true
          },
          shadowSize: 0
      },
      legend: {
        position: 'nw'
      },
      grid: {
        hoverable: true,
        clickable: true,
        borderColor: '#ddd',
        borderWidth: 1,
        labelMargin: 10,
        backgroundColor: '#fff'
      },
      yaxis: {
        tickDecimals : 0,
        min: 0,
        // max: 15,
        color: '#eee'
      },
      xaxis: {
        /*tickDecimals : 0,*/
        tickSize: 1,
        tickFormatter: function(v, a) {return months[v]},
        color: '#eee'
      }
    });

   function showTooltip(x, y, contents) {
    $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
      position: 'absolute',
      display: 'none',
      top: y + 10,
      left: x - 80
    }).appendTo("body").fadeIn(200);
   }
    
   var previousPoint = null;
   $("#basicflot2").bind("plothover", function (event, pos, item) {
      $("#x").text(pos.x.toFixed(2));
      $("#y").text(pos.y.toFixed(2));
      
    if(item) {
      if (previousPoint != item.dataIndex) {
       previousPoint = item.dataIndex;
            
       $("#tooltip").remove();

       var x = item.datapoint[0],
       y = item.datapoint[1];
        
       showTooltip(item.pageX, item.pageY,
          item.series.label + " of " + months[x] + " = " + y);
      }
      
    } else {
      $("#tooltip").remove();
      previousPoint = null;            
    }
    
   });
    
   $("#basicflot2").bind("plotclick", function (event, pos, item) {
    if (item) {
      plot.highlight(item.series, item.datapoint);
    }
   });
  
  if(typeof Morris != "undefined"){
    // Donut Chart
    new Morris.Donut({
        element: 'donut-chart2',
        data: [
          {label: "Chrome", value: 30},
          {label: "Firefox", value: 20},
          {label: "Opera", value: 20},
          {label: "Safari", value: 20},
          {label: "Internet Explorer", value: 10}
        ],
        colors: ['#D9534F','#1CAF9A','#428BCA','#5BC0DE','#428BCA']
    });


    new Morris.Line({
      // ID of the element in which to draw the chart.
      element: 'line-chart',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
          { y: '2006', a: 50, b: 0 },
          { y: '2007', a: 60,  b: 25 },
          { y: '2008', a: 45,  b: 30 },
          { y: '2009', a: 40,  b: 20 },
          { y: '2010', a: 50,  b: 35 },
          { y: '2011', a: 60,  b: 50 },
          { y: '2012', a: 65, b: 55 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      gridTextColor: 'rgba(255,255,255,0.5)',
      lineColors: ['#fff', '#fdd2a4'],
      lineWidth: '2px',
      hideHover: 'always',
      smooth: false,
      grid: false
    });
  }
    
    $('#sparkline').sparkline([4,3,3,1,4,3,2,2,3,10,9,6], {
      type: 'bar', 
      height:'30px',
        barColor: '#428BCA'
    });
  
    
    $('#sparkline2').sparkline([9,8,8,6,9,10,6,5,6,3,4,2], {
      type: 'bar', 
      height:'30px',
        barColor: '#999'
    });
    
  if($.fn.dataTable){
    $('#table1').dataTable({
      "iDisplayLength": 5,
      "bLengthChange": false
    });
    
    // Chosen Select
    $("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
  }
    
});

// Chart Total Kategori
$(document).ready(function(){
   var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
   var plot = $.plot($("#basicflot3"),
    [ { data: catInStat,
          label: "Total Type In",
          color: "#1CAF9A"
        },
        { data: catOutStat,
          label: "Total Type Out",
          color: "#D9534F"
        },
        { data: catInOutStat,
          label: "Total Type In Out",
          color: "#7f00ff"
        }
      ],
      {
      series: {
       lines: {
          show: true,
          fill: true,
          lineWidth: 1,
          fillColor: {
            colors: [ 
              { opacity: 0.5 },
              { opacity: 0.5 }
            ]
          }
        },
       points: {
            show: true
          },
          shadowSize: 0
      },
      legend: {
        position: 'nw'
      },
      grid: {
        hoverable: true,
        clickable: true,
        borderColor: '#ddd',
        borderWidth: 1,
        labelMargin: 10,
        backgroundColor: '#fff'
      },
      yaxis: {
        tickDecimals : 0,
        min: 0,
        // max: 15,
        color: '#eee'
      },
      xaxis: {
        /*tickDecimals : 0,*/
        tickSize: 1,
        tickFormatter: function(v, a) {return months[v]},
        color: '#eee'
      }
    });

   function showTooltip(x, y, contents) {
    $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
      position: 'absolute',
      display: 'none',
      top: y + 10,
      left: x - 80
    }).appendTo("body").fadeIn(200);
   }
    
   var previousPoint = null;
   $("#basicflot3").bind("plothover", function (event, pos, item) {
      $("#x").text(pos.x.toFixed(2));
      $("#y").text(pos.y.toFixed(2));
      
    if(item) {
      if (previousPoint != item.dataIndex) {
       previousPoint = item.dataIndex;
            
       $("#tooltip").remove();
       var x = item.datapoint[0],
       y = item.datapoint[1];
        
       showTooltip(item.pageX, item.pageY,
          item.series.label + " of " + months[x] + " = " + y);
      }
      
    } else {
      $("#tooltip").remove();
      previousPoint = null;            
    }
    
   });
    
   $("#basicflot3").bind("plotclick", function (event, pos, item) {
    if (item) {
      plot.highlight(item.series, item.datapoint);
    }
   });
  
  if(typeof Morris != "undefined"){
    // Donut Chart
    new Morris.Donut({
        element: 'donut-chart2',
        data: [
          {label: "Chrome", value: 30},
          {label: "Firefox", value: 20},
          {label: "Opera", value: 20},
          {label: "Safari", value: 20},
          {label: "Internet Explorer", value: 10}
        ],
        colors: ['#D9534F','#1CAF9A','#428BCA','#5BC0DE','#428BCA']
    });


    new Morris.Line({
      // ID of the element in which to draw the chart.
      element: 'line-chart',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
          { y: '2006', a: 50, b: 0 },
          { y: '2007', a: 60,  b: 25 },
          { y: '2008', a: 45,  b: 30 },
          { y: '2009', a: 40,  b: 20 },
          { y: '2010', a: 50,  b: 35 },
          { y: '2011', a: 60,  b: 50 },
          { y: '2012', a: 65, b: 55 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      gridTextColor: 'rgba(255,255,255,0.5)',
      lineColors: ['#fff', '#fdd2a4'],
      lineWidth: '2px',
      hideHover: 'always',
      smooth: false,
      grid: false
    });
  }
    
    $('#sparkline').sparkline([4,3,3,1,4,3,2,2,3,10,9,6], {
      type: 'bar', 
      height:'30px',
        barColor: '#428BCA'
    });
  
    
    $('#sparkline2').sparkline([9,8,8,6,9,10,6,5,6,3,4,2], {
      type: 'bar', 
      height:'30px',
        barColor: '#999'
    });
    
  if($.fn.dataTable){
    $('#table1').dataTable({
      "iDisplayLength": 5,
      "bLengthChange": false
    });
    
    // Chosen Select
    $("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
  }
    
});