$(function () {
	"use strict";

	// chart 10
	// Create the chart
	Highcharts.chart('chart10', {
		chart: {
			type: 'column',
			styledMode: true
		},
		credits: {
			enabled: false
		},
		title: {
			text: ''
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Total Dalam Bentuk Persen (%)'
			}
		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y:.1f}%'
				}
			}
		},
		series: [{
			name: "Browsers",
			colorByPoint: true,
			data: [{
				name: "TNI/Polri",
				y: 62.74,
				drilldown: "TNI/Polri"
			}, {
				name: "PNS",
				y: 10.57,
				drilldown: "PNS"
			}, {
				name: "Wirausaha",
				y: 7.60,
				drilldown: "Wirausaha"
			}, {
				name: "Kantoran",
				y: 5.58,
				drilldown: "Kantoran"
			},{
				name: "Yang Lainya",
				y: 1.92,
				drilldown: "Yang Lainya"
			}]
		}],
	});

});
