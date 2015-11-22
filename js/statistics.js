var getUrlParameter = function getUrlParameter(sParam)
{
	var sPageURL = decodeURIComponent(window.location.search.substring(1)),
		sURLVariables = sPageURL.split('&'),
		sParameterName,
		i;

	for (i = 0; i < sURLVariables.length; i++)
	{
		sParameterName = sURLVariables[i].split('=');

		if (sParameterName[0] === sParam)
		{
			return sParameterName[1] === undefined ? true : sParameterName[1];
		}
	}
};

function getDates()
{
	var id = getUrlParameter("event");
	$.ajax(
		{
			url: "./bin/statistics/fetch1.php",
			method: "GET",
			data: {
				id: id
			},
			cache: false,
			success: function (data)
			{
				var dates = ((JSON && JSON.parse(data)) || $.parseJSON(data));
				$("select#date").append("<option value='' selected>Overall</option>");
				for (var i = 0; i < dates.length; i++)
				{
					$("select#date").append("<option value='" + dates[i].date + "'>" + dates[i].date + "</option>")
				}
			}
		});
}

function updateGraph()
{
	var id = getUrlParameter("event");
	var date = $("select#date").val();
	$.ajax(
		{
			url: "./bin/statistics/fetch2.php",
			method: "GET",
			data: {
				id: id,
				date: date
			},
			cache: false,
			success: function (data)
			{
				var result = ((JSON && JSON.parse(data)) || $.parseJSON(data));
				var ctx_bar_in = document.getElementById("check-in-chart").getContext("2d");
				var ctx_bar_out = document.getElementById("check-out-chart").getContext("2d");
				var ctx_line = document.getElementById("guest-amount-chart").getContext("2d");
				var ctx_pie = document.getElementById("attendance-rate-chart").getContext("2d");

				var checkin = {
					labels: result.enterHour,
					datasets:
						[{
							label: "My First dataset",
							fillColor: "rgba(220,220,220,0.2)",
							strokeColor: "rgba(220,220,220,1)",
							pointColor: "rgba(220,220,220,1)",
							pointStrokeColor: "#fff",
							pointHighlightFill: "#fff",
							pointHighlightStroke: "rgba(220,220,220,1)",
							data: result.enterCount
						}]
				};

				var checkout = {
					labels: result.exitHour,
					datasets: [
						{
							label: "My First dataset",
							fillColor: "rgba(220,220,220,0.2)",
							strokeColor: "rgba(220,220,220,1)",
							pointColor: "rgba(220,220,220,1)",
							pointStrokeColor: "#fff",
							pointHighlightFill: "#fff",
							pointHighlightStroke: "rgba(220,220,220,1)",
							data: result.exitCount
						}
					]

				};

				var pieChartData = [
					{
						value: result.attendance.total,
						color: "#F7464A",
						highlight: "#FF5A5E",
						label: "Absent"
					},
					{
						value: result.attendance.count,
						color: "#46BFBD",
						highlight: "#5AD3D1",
						label: "Attend"
					}
				];

				window.barIn = new Chart(ctx_bar_in).Bar(checkin,
					{
						responsive: true
					});
				window.barOut = new Chart(ctx_bar_out).Bar(checkout,
					{
						responsive: true
					});
				window.myLine = new Chart(ctx_line).Line(checkout,
					{
						responsive: true
					});
				window.myPieChart = new Chart(ctx_pie).Pie(pieChartData,
					{
						responsive: true
					});
			}
		});
}

function updateCheckpoints()
{
	var id = getUrlParameter("event");
	$.ajax(
		{
			url: "./bin/statistics/fetch3.php",
			method: "GET",
			data: {
				id: id
			},
			cache: false,
			success: function (data)
			{
				var result = ((JSON && JSON.parse(data)) || $.parseJSON(data));
				$.each(result,function(j,i)
				{
					$("tbody#checkpoints").append("<tr hidden><td>" + i.id + "</td><td>" + i.name + "</td><td>" + i.count + "</td></tr>");
					$("tr").fadeIn("fast");
				});
			}
		});
}

$("select#date").change(function()
{
	window.barIn.destroy();
	window.barOut.destroy();
	window.myLine.destroy();
	window.myPieChart.destroy();
	updateGraph();
});

window.onload = function ()
{
	getDates();
	updateGraph();
	updateCheckpoints();
};