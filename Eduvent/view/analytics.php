<script src="../Eduvent/lib/fusioncharts/fusioncharts.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.theme.fint.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.charts.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.widgets.js"></script>


<style>
.chart {
	background-color: #f5f5f5;
}

.c-caption {
	/*font-weight: bold;*/
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
</style>

<div class="container">
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
		<div class="span12 chart">
			<div class="span12">
			Tickets sold this month    <span class="i-month">Nov</span></p>
			</div>
			<div class="span12 text-xs-center" id="">
			text
			</div>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="col-md-12">
		<div class="span12 chart" style="margin:20px;">
			<div class="span12">
			Orders
			</div>
			<div class="span12 text-xs-center" id="">
			text
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
                            "width": "400",
                            "height":"400",
                            "dataFormat": "json",
                            "dataSource": {
								"chart": {
									"animation": 1,
									"caption": "",
									"bgcolor": "fafafa",
									"xAxisname": "Topic",
									"yaxisname": "Sales",
									"numberprefix": "€",
									"plotgradientcolor": "",
									"showalternatehgridcolor": "0",
									"showplotborder": "0",
									"showcanvasborder": "0",
									"canvasborderalpha": "0",
									"legendshadow": "0",
									"legendborderalpha": "0",
									"showborder": "0",
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
										"label": "Entrepreneurship",
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
</script>