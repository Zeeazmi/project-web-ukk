var options = {
	chart: {
		height: 335,
		type: "bar",
		toolbar: {
			show: false,
		},
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: "40%",
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		show: true,
		width: 2,
		colors: ["transparent"],
	},
	series: [
		{
			name: "Revenue",
			data: [2000, 3000, 4000],
		},
		{
			name: "Income",
			data: [2500, 3500, 4500],
		},
	],
	legend: {
		show: false,
	},
	xaxis: {
		categories: ["2021", "2022", "2023"],
	},
	yaxis: {
		show: false,
	},
	fill: {
		opacity: 1,
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return "$ " + val + " thousands";
			},
		},
	},
	grid: {
		borderColor: "#575e6d",
		strokeDashArray: 5,
		xaxis: {
			lines: {
				show: true,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0,
		},
	},
	colors: ["#0fc079", "#3975f9", "#bf7a6a"],
	fill: {
		type: "gradient",
		gradient: {
			shadeIntensity: 1,
			opacityFrom: 0.7,
			type: "vertical",
			opacityTo: 0.9,
			colorStops: [
				{
					offset: 0,
					color: "#2463ea",
					opacity: 1,
				},
				{
					offset: 50,
					color: "#f03b59",
					opacity: 1,
				},
				{
					offset: 100,
					color: "#1b1f2d",
					opacity: 1,
				},
			],
		},
	},
};
var chart = new ApexCharts(document.querySelector("#orders"), options);
chart.render();
