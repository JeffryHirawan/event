var editing = false;
var limit = 25;
var search = "";

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

window.onload = function ()
{
	listCP();
};

function listCP()
{
	var id = getUrlParameter("event");
	if(editing) return;
	$.ajax(
		{
			url: "./bin/checkpoint/fetch1.php",
			method: "GET",
			data: {
				id: id,
				limit: limit,
				search: search
			},
			cache: false,
			success: function (data)
			{
				var checkpoints = ((JSON && JSON.parse(data)) || $.parseJSON(data));
				$("tbody#cpList").empty();
				for (var i = 0; i < checkpoints.length; i++)
				{
					$("tbody#cpList").append("<tr id='entry_" + checkpoints[i].id + "'hidden><td>" + checkpoints[i].id + "</td><td>" + checkpoints[i].name + "</td><td>" + checkpoints[i].visits + "</td><td align='center'><a role='button' class='btn-sm btn-info' onclick='editCP(" + checkpoints[i].id + ")'>Edit</a> <a role='button' class='btn-sm btn-danger' onclick='deleteCP(" + checkpoints[i].id + ")'>Delete</a></td></tr>");
				}
				$('tr').fadeIn("slow");
			}
		});
}

function editCP(id)
{
	var entry = "tr#entry_" + id;
	$.ajax(
		{
			url: "./bin/checkpoint/fetch2.php",
			method: "GET",
			data: {
				id: id
			},
			cache: false,
			success: function (data)
			{
				var checkpoint = ((JSON && JSON.parse(data)) || $.parseJSON(data));
				$(entry).fadeOut("fast",function()
				{
					$(entry).empty();
					$(entry).append("<td>" + checkpoint.id + "</td><td><input type='text' class='input-sm form-control' id='editCPName' value='" + checkpoint.name + "'></td><td>" + checkpoint.visits + "</td><td align='center'><a role='button' class='btn-sm btn-success' onclick='saveEdit(" + checkpoint.id + ")'>Save</a> <a role='button' class='btn-sm btn-danger' onclick='cancelEdit(" + checkpoint.id + ")'>Cancel</a></td>");
					$(entry).fadeIn("fast");
					editing = true;
				});
			}
		});
}

function saveEdit(id)
{
	var entry = "tr#entry_" + id;
	var name = $("input#editCPName").val();
	$.ajax(
		{
			url: "./bin/checkpoint/update.php",
			method: "POST",
			data: {
				id: id,
				name: name
			},
			cache: false,
			success: function (data)
			{
				cancelEdit(id);
			}
		});
}

function cancelEdit(id)
{
	var entry = "tr#entry_" + id;
	$.ajax(
		{
			url: "./bin/checkpoint/fetch2.php",
			method: "GET",
			data: {
				id: id
			},
			cache: false,
			success: function (data)
			{
				var checkpoint = ((JSON && JSON.parse(data)) || $.parseJSON(data));
				$(entry).fadeOut("fast",function()
				{
					$(entry).empty();
					$(entry).append("<td>" + checkpoint.id + "</td><td>" + checkpoint.name + "</td><td>" + checkpoint.visits + "</td><td align='center'><a role='button' class='btn-sm btn-info' onclick='editCP(" + checkpoint.id + ")'>Edit</a> <a role='button' class='btn-sm btn-danger' onclick='deleteCP(" + checkpoint.id + ")'>Delete</a></td>");
					$(entry).fadeIn("fast");
					editing = false;
				});
			}
		});
}

function deleteCP(id)
{
	var entry = "tr#entry_" + id;

	$.ajax(
		{
			url: "./bin/checkpoint/delete.php",
			method: "GET",
			data: {
				id: id
			},
			cache: false,
			success: function (data)
			{
				$(entry).fadeOut("slow",function()
				{
					$(entry).remove();
				});
			}
		});
}

$("a#newCPButton").click(function (e)
{
	e.preventDefault();
	if(editing) return;
	var id = getUrlParameter("event");
	var name = $("input#newCPName").val();
	$.ajax(
		{
			url: "./bin/checkpoint/submit.php",
			method: "POST",
			data: {
				id: id,
				name: name
			},
			cache: false,
			success: function (data)
			{
				$("tbody#cpList").append("<tr id='entry_" + data + "' hidden><td>" + data + "</td><td>" + name + "</td><td>0</td><td align='center'><a role='button' class='btn-sm btn-info' onclick='editCP(" + data + ")'>Edit</a> <a role='button' class='btn-sm btn-danger' onclick='deleteCP(" + data + ")'>Delete</a></td></tr>");
				$('tr').fadeIn("slow");
				$("input#newCPName").val("");
			}
		});
});

$("input#search").keyup(function()
{
	search = $(this).val();
	listCP();
});

$("select#limit").change(function()
{
	limit = $(this).val();
	listCP();
});