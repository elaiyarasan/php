
function getdata()
{
	var data=
	{
		'datatable': $('#datatable').val(),
		'charttype': $('#charttype').val(),
	}

  $.ajax({

            type : 'POST',
            url  : 'register.php',
            data : data,
        });

    

    location.reload();

}
    
$(document).ready( function() {

$.ajax({
      dataType: "json",
      url: "selectdata.php",
      data: "",
     success: riskLocation 

    })
    });
  function riskLocation(data){
    console.log(data);
    for(i=0;i<data.length;i++)
    {

switch(data[i].chart_type)
{
    case 'BAR_CHAT':
 var chart= AmCharts.makeChart( "chartdiv1", {
    "theme": "light",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": data,
    "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.85,
        "lineAlpha": 0.1,
        "type": "column",
        "topRadius":1,
        "valueField": "count"
    }],
    "depth3D": 40,
    "angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "data",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":0,
        "gridAlpha":0

    },
    "export": {
        "enabled": true
     }

}, 0);
 break;

 case 'PIE_CHAT':
var chart = AmCharts.makeChart("chartdiv2", {
    "type": "pie",
    "theme": "light",
    "innerRadius": "40%",
    "gradientRatio": [-0.4, -0.4, -0.4, -0.4, -0.4, -0.4, 0, 0.1, 0.2, 0.1, 0, -0.2, -0.5],
    "dataProvider": data,
    "balloonText": "[[value]]",
    "valueField": "count",
    "titleField": "data",
    "balloon": {
        "drop": true,
        "adjustBorderColor": false,
        "color": "#FFFFFF",
        "fontSize": 16
    },
    "export": {
        "enabled": true
    }
});
break;








}   

}

}

