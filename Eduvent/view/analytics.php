<script src="../Eduvent/lib/fusioncharts/fusioncharts.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.theme.fint.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.charts.js"></script>
<script src="../Eduvent/lib/fusioncharts/fusioncharts.widgets.js"></script>

<div class="row">
	<div class="col-md-4">
		<div id="CIchartContainer">Chart will be here</div>
	</div>
	<div class="col-md-4">
		<div id="DPIview">Chart will be here</div>
	</div>
	<div class="col-md-4">
		<div id="DCTview">Chart will be here</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div id="CIchartContainer">Chart will be here</div>
	</div>
	<div class="col-md-4">
		<div id="DPIview">Chart will be here</div>
	</div>
	<div class="col-md-4">
		<div id="DCTview">Chart will be here</div>
	</div>
</div>

<script type="text/javascript">
            var revenuedciChart;
			loaddciChart();

            function loaddciChart(){
                FusionCharts.ready(function(){
                    revenuedciChart = new FusionCharts({
                        "type": "doughnut2d",
                        "renderAt": "CIchartContainer",
                        "width": "500",
                        "height": "400",
                        "dataFormat": "json",
                        "dataSource": {
                    "chart": {
                        //"caption": "Flight Dispatch",
                        //"subCaption": "Last year",
                        //"numberPrefix": "$",
                        "paletteColors": "#70AD47, #FFC000, #C00000",
                        "bgColor": "#ffffff",
                        "showBorder": "0",
                        "use3DLighting": "0",
                        "showShadow": "0",
                        "enableSmartLabels": "0",
                        "startingAngle": "310",
                        "showLabels": "0",
                        "showPercentValues": "1",
                        "showLegend": "1",
                        "legendShadow": "0",
                        "legendBorderAlpha": "0",
                        "defaultCenterLabel": "Total no. of flights: 10",
                        "centerLabel": "Flights $label: $value",
                        "centerLabelBold": "1",
                        "showTooltip": "0",
                        "decimals": "0",
                        "captionFontSize": "14",
                        "subcaptionFontSize": "14",
                        "subcaptionFontBold": "0",
                        "useDataPlotColorForLabels": "1"
                    },
                        "data": [
                            {
                                "label": "on time",
                                "value": "70"
                            },  
                            {
                                "label": "at risk",
                                "value": "20"
                            },
                            {
                                "label": "overdue",
                                "value": "10"
                            }]
                        }
                    });

                    revenuedciChart.render();
                });
            }
			
/////////////////////////////////////////////////////////////////////////////

                var PIChart;
				loadPIChart()

                /**
                function updateChart(){
                    $.ajax({
                        url:'pages-php/fetchdata.php',
                        data:{
                            format: 'json'
                        },
                        error: function(xhr,status, error){
                            var err = eval("("+xhr.responseText+")");
                            alert(err.Message);
                        },
                        success: function(data){
                            revenueChart.setJSONData(data);
                        },
                        type: 'GET'
                    });
                }
                */

                function loadPIChart(){
                    FusionCharts.ready(function(){
                        PIChart = new FusionCharts({            
                            "type": "column2d",
                            "renderAt": "DPIview",
                            "width": "500",
                            "height":"400",
                            "dataFormat": "json",
                            "dataSource": {
                            "chart": {
                                "caption": "Process Level Overview",
                                "subCaption": "Last week Overview",
                                "xAxisName": "Process Levels",
                                "yAxisName": "Number of Issues",
                                "theme": "fint"
                            },
                            "data": [
                                {
                                    "label": "Loading",
                                    "value": "420000"
                                },
                                {
                                    "label": "Maintenance",
                                    "value": "810000"
                                },
                                {
                                    "label": "Service Check",
                                    "value": "720000"
                                }
                            ]
                            }
                        });

                        PIChart.render();
                    });
                }
				
/////////////////////////////////////////////////////////////////////////////////

                var NumberAircraftsChart;
				loadNumberAircraftsChart();

                /**
                function updateChart(){
                    $.ajax({
                        url:'pages-php/fetchdata.php',
                        data:{
                            format: 'json'
                        },
                        error: function(xhr,status, error){
                            var err = eval("("+xhr.responseText+")");
                            alert(err.Message);
                        },
                        success: function(data){
                            revenueChart.setJSONData(data);
                        },
                        type: 'GET'
                    });
                }
                */

                function loadNumberAircraftsChart(){
                    FusionCharts.ready(function(){
                        NumberAircraftsChart = new FusionCharts({
                            "type": "column2d",
                            "renderAt": "DCTview",
                            "width": "500",
                            "height":"400",
                            "dataFormat": "json",
                            "dataSource": {
                            "chart": {
                                "caption": "Aggregated Aircraft Numbers",
                                "subCaption": "Last week Overview",
                                "xAxisName": "Weekdays",
                                "yAxisName": "Ammount of Aircraft",
                                "theme": "fint"
                            },
                            "data": [
                                {
                                    "label": "Mo",
                                    "value": "420000"
                                },
                                {
                                    "label": "Tue",
                                    "value": "810000"
                                },
                                {
                                    "label": "Wed",
                                    "value": "720000"
                                },
                                {
                                    "label": "Thu",
                                    "value": "550000"
                                },
                                {
                                    "label": "Fr",
                                    "value": "910000"
                                },
                                {
                                    "label": "Sa",
                                    "value": "510000"
                                },
                                {
                                    "label": "So",
                                    "value": "680000"
                                }
                            ]
                            }
                        });

                        NumberAircraftsChart.render();
                    });
                }
</script>