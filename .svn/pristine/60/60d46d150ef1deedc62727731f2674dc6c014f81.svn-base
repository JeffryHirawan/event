var limit = 25;
var status = "All";
var search = "";

function listEvent()
{
	$.ajax(
	{
		url: "./bin/event/fetch.php",
		method: "GET",
		data:
		{
			limit: limit,
			status: status,
			search: search
		},
		cache: false,
		success: function (data)
		{
			$("#eventList").html(data);
			$('tr').fadeIn("slow");
		}
	});
}

window.onload = function ()
{
	listEvent();
};

$('#myTab a').click(function (e)
{
	e.preventDefault();
	$(this).tab('show');
});

$('select#filter').change(function()
{
	status = $('select#filter').val();
	listEvent();
});

$('select#limit').change(function()
{
	limit = $('select#limit').val();
	listEvent();
});

$('input#search').keyup(function()
{
	search = $('input#search').val();
	listEvent();
});

$('#loading-example-btn').click(function ()
{
	var btn = $(this);
	btn.button('loading');
});

$(document).ready(function ()
{
	$('.templatemo-sidebar-menu li.sub a').click(function ()
	{
		if ($(this).parent().hasClass('open'))
		{
			$(this).parent().removeClass('open');
		} else
		{
			$(this).parent().addClass('open');
		}
	});
});

