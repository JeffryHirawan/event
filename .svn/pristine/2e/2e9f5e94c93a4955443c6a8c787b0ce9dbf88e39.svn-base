function listEvent()
{
	$.ajax(
		{
			url: "./bin/event/fetch.php",
			method: "GET",
			cache: false,
			success: function (data)
			{
				var result = ((JSON && JSON.parse(data)) || $.parseJSON(data));
				$.each(result,function(j,i)
				{
					$("tbody#eventList").append("<tr hidden><td>" + i.id + "</td><td>" + i.name + "</td><td>" + i.type + "</td><td>" + i.start_date + "</td><td>" + i.end_date + "</td><td>" + i.pic + "</td><td>" + i.mode + "</td></tr>");
				});
				$("tr").fadeIn("fast");
			}
		});
}

window.onload = function ()
{
	listEvent();
};