<script src="../Eduvent/lib/fusioncharts/fusioncharts.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.theme.fint.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.charts.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.widgets.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.maps.js"></script>


<style>
.chart {
	background-color: #f5f5f5;
}

.c-caption {
	font-weight: bold;
	padding: 2px 8px;
}

.kpi-caption {
	margin-bottom: 0!important;
}

.kpi-value {
	font-size: 1.5em;
	font-weight: bold;
	margin: auto;
}

.i-month {
	background-color: #32d24d;
	border-radius: 5px;
	color: white;
	font-size: 12px;
	font-weight: normal;
	padding: 1px 8px;
}

.i-year {
	background-color: orange;
	border-radius: 5px;
	color: white;
	font-size: 12px;
	font-weight: normal;
	padding: 1px 8px;
}

#c-current-tickets {
	padding: 0 10px 10px 10px;
}

#list-current-tickets {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	margin-bottom: 10px;
}

#tbl-orders {
	height: 20em;
	overflow: auto;
}
</style>

<div class="container">

<!--Page heading-->
<div class="row">
	<div class="col-md-12">
		<h1 class="h1-responsive">Eduvent Analytics</h1>
		<h3 class="h3-responsive"><small class="text-muted">Track and monitor your business operations in real-time.</small></h3>
	</div>
</div>
<!--/.Page heading-->
<hr>

<div class="row-fluid" style="padding:20px;">
	<div class="col-md-3">
		<div class="span12 chart text-xs-center">
			<p class="kpi-caption">Total sales this month    <span class="i-month">Nov</span></p>
			<p class="kpi-value">€3.550</p>
		</div>
	</div>
	<div class="col-md-3">
		<div class="span12 chart text-xs-center">
			<p class="kpi-caption">Total tickets sold this month</p>
			<p class="kpi-value">310</p>		
		</div>
	</div>
	<div class="col-md-3">
		<div class="span12 chart text-xs-center">
			<p class="kpi-caption">Total sales this year    <span class="i-year">2016</span></p>
			<p class="kpi-value">€41.325</p>
		</div>
	</div>
	<div class="col-md-3">
		<div class="span12 chart text-xs-center">
			<p class="kpi-caption">Total tickets sold this year</p>
			<p class="kpi-value">3115</p>
		</div>
	</div>
</div>

<div class="row-fluid" style="">
	<div class="col-md-12">
		<div class="span12 chart" style="margin:20px;">
			<div class="span12 c-caption">
			Monthly sales analysis    <span class="i-year">2016</span>
			</div>
			<div class="span12 text-xs-center" id="c-monthly-analysis">
			text
			</div>
		</div>
	</div>
</div>

<div class="row-fluid" style="padding:20px;">
	<div class="col-md-5">
		<div class="span12 chart">
			<div class="span12 c-caption">
			Top 5 topics by sales
			</div>
			<div class="span12 text-xs-center" id="c-top-topics">

			</div>
		</div>
	</div>
	<div class="col-md-7">
		<div class="row-fluid">
			<div class="col-md-7">
				<div class="span12 chart">
					<div class="span12">
					Tickets sold this month    <span class="i-month">Nov</span></p>
					</div>
					<div class="span12 text-xs-left" id="c-current-tickets">
						<ul class="list-group" id="list-current-tickets">
							<li class="list-group-item">Tickets sold<span class="pull-right font-weight-bold">1106</span></li>
							<li class="list-group-item">Paid tickets<span class="pull-right font-weight-bold">485</span></li>
							<li class="list-group-item">Free tickets<span class="pull-right font-weight-bold">621</span></li>
						</ul>
						<ul class="list-group" id="list-current-tickets">
							<li class="list-group-item">Tickets available<span class="pull-right font-weight-bold">300</span></li>
							<li class="list-group-item">Tickets pending<span class="pull-right font-weight-bold">0</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="span12 chart">
					<div class="span12 c-caption">
						<br>
					</div>
					<div class="span12 text-xs-center" id="c-tickets-types">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="col-md-12">
		<div class="span12" style="margin:20px;">
			<div class="span12 c-caption grey lighten-4">
			Orders
			</div>
			<div class="span12" id="tbl-orders">

				<table class="table table-hover">
					<thead class="blue-grey lighten-5">
						<tr>
							<th>Order#</th>
							<th>Purchaser</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Date</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">cmroicv</th>
							<td>Elma Sylvester</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">x1pgfoj</th>
							<td>Gregor Anne</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">riauxk4</th>
							<td>Antonia Gratia</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">8cyqjfr</th>
							<td>Ursula Fenstermacher</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">xc4nxu4</th>
							<td>Andrea Pfeiffer</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">yemk8vd</th>
							<td>Marina Theissen</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">s9xalsy</th>
							<td>Jan Lehmann</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">yopy4ux</th>
							<td>Benjamin Pfeifer</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">wvqep8c</th>
							<td>Sandra Wirtz</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
						<tr>
							<th scope="row">6ep4d3p</th>
							<td>Uwe Wagner</td>
							<td>1</td>
							<td>€300.00</td>
							<td>11/11/2016</td>
							<td>Success</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
</div>


<script type="text/javascript">
var chartMonthlyAnalysis;
loadMonthlyAnalysis();

function loadMonthlyAnalysis(){
	FusionCharts.ready(function(){
		chartMonthlyAnalysis = new FusionCharts({
                            "type": "stackedcolumn2dline",
                            "renderAt": "c-monthly-analysis",
                            "width": "1000",
                            "height":"400",
                            "dataFormat": "json",
                            "dataSource": {
								"chart": {
									"animation": 1,
									"caption": "",
									"bgcolor": "fafafa",
									"xAxisname": "Month",
									"yAxisName": "Sales (Eur in thousands)",
									"numberprefix": "€",
									"plotgradientcolor": "",
									"showalternatehgridcolor": "0",
									"showplotborder": "0",
									"showcanvasborder": "0",
									"canvasborderalpha": "0",
									"legendshadow": "0",
									"legendborderalpha": "0",
									"showborder": "0"
								},
								"categories": [
									{
										"category": [
											{
												"label": "Jan"
											},
											{
												"label": "Feb"
											},
											{
												"label": "Mar"
											},
											{
												"label": "Apr"
											},
											{
												"label": "May"
											},
											{
												"label": "Jun"
											},
											{
												"label": "Jul"
											},
											{
												"label": "Aug"
											},
											{
												"label": "Sep"
											},
											{
												"label": "Oct"
											},
											{
												"label": "Nov"
											},
											{
												"label": "Dec"
											}
										]
									}
								],
								"dataset": [
									{
										"seriesname": "Sales",
										"color": "4cafec",
										"data": [
											{
												"value": "3549"
											},
											{
												"value": "4549"
											},
											{
												"value": "12024"
											},
											{
												"value": "10000"
											},
											{
												"value": "11271"
											},
											{
												"value": "5729"
											},
											{
												"value": "5594"
											},
											{
												"value": "12024"
											},
											{
												"value": "9000"
											},
											{
												"value": "3549"
											},
											{
												"value": "3549"
											},
											{
												"value": "0"
											}
										]
									},
									{
										"seriesname": "Profit",
										//"parentyaxis": "S",
										"renderas": "Line",
										"color": "f8bd19",
										"data": [
											{
												"value": "100"
											},
											{
												"value": "600"
											},
											{
												"value": "900"
											},
											{
												"value": "850"
											},
											{
												"value": "1000"
											},
											{
												"value": "900"
											},
											{
												"value": "950"
											},
											{
												"value": "1100"
											},
											{
												"value": "900"
											},
											{
												"value": "500"
											},
											{
												"value": "100"
											},
											{
												"value": "0"
											}
										]
									}
								]
							}
		});

		chartMonthlyAnalysis.render();
	});
}

///////////////////////////////////////////////////////////////////


var chartTopTopics;
loadTopTopics();

function loadTopTopics(){
	FusionCharts.ready(function(){
		chartTopTopics = new FusionCharts({
                            "type": "bar2d",
                            "renderAt": "c-top-topics",
                            "width": "390",
                            "height":"283",
                            "dataFormat": "json",
                            "dataSource": {
								"chart": {
									"animation": 1,
									"caption": "",
									"bgcolor": "fafafa",
									"xAxisname": "Topic",
									"yAxisName": "Sales",
									"numberprefix": "€",
									"plotgradientcolor": "",
									"showalternatehgridcolor": "0",
									"showplotborder": "0",
									"showcanvasborder": "0",
									"canvasborderalpha": "0",
									"legendshadow": "0",
									"legendborderalpha": "0",
									"showborder": "0",
									"showAlternateVGridColor": "0",
									"palettecolors": "#ffcb2a"
								},
								"data": [
									{
										"label": "Technology",
										"value": "800"
									},
									{
										"label": "Business",
										"value": "700"
									},
									{
										"label": "Finance",
										"value": "500"
									},
									{
										"label": "Sports",
										"value": "400"
									},
									{
										"label": "Art",
										"value": "200"
									}
								]
							}
		});
		
		chartTopTopics.render();			
	});
}

/////////////////////////////////////////////////////////////////////

var chartTicketsTypes;
loadTicketsTypes();

function loadTicketsTypes(){
	FusionCharts.ready(function(){
		chartTicketsTypes = new FusionCharts({
                            "type": "vbullet",
                            "renderAt": "c-tickets-types",
                            "width": "200",
                            "height":"283",
                            "dataFormat": "json",
                            "dataSource": {
								"chart": {
									"animation": "1",
									"lowerLimit": "0",
									"plotFillColor": "#0075c2",
									"targetColor": "#8e0000",
									"showHoverEffect": "1",
									"showBorder": "0",
									"bgColor": "#ffffff",
									"showShadow": "0",
									"colorRangeFillMix": "{light}",
									"chartBottomMargin": "20"
								},
								"colorRange": {
									"color": [
										{
											"minValue": "0",
											"maxValue": "485",
											"code": "#e44a00",
											"alpha": "70"
										},
										{
											"minValue": "486",
											"maxValue": "1106",
											"code": "#f2c500",
											"alpha": "70"
										},
										{
											"minValue": "1107",
											"maxValue": "1407",
											"code": "#1aaf5d",
											"alpha": "70"
										}
									]
								},
								"value": "680",
								"target": "710"
							}
		});

		chartTicketsTypes.render();
	});
}
</script>