<html>
<head>
	<title>CHARTS</title>
<style>
.chart {
  width: 100%;
  height: 500px;
}	


</style>
    <script src="jquery-3.3.1.min.js"></script>
	<script src="getchart.js"></script>
	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://www.amcharts.com/lib/3/pie.js"></script></head>

<body>
	<div align="center"> 
	<label>Data</label><br>
<select id="datatable">
	<option value="audi">audi</option>
	<option value="ehr">ehr</option>
	<option value="time">time</option>
	<option  value="enhan">enhan</option>
</select>
<br>
<label>CHARTTYPE</label><br>
<select id="charttype">
	<option value="1">BAR_CHAT</option>
	<option value="2">PIE_CHART</option>
	<option value="3">AREA_CHART</option>
	<option value="4">LINE_Chart</option>
</select>
<br>
<button type="button" onclick="getdata()">submit</button>
</div>
<div>
	<?php include 'selectdata.php';?>
</div>
<div id="chartdiv1" class="chart"></div>
<div id="chartdiv2" class="chart"></div>
<div id="chartdiv3"></div>
<div id="chartdiv4"></div>
<div id="chartdiv5"></div>

</body>
</html>
