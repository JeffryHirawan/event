var search = "";
var limit = 25;
var editing = false;
var file;

window.onload = function ()
{
	listGuest();
};

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

function listGuest()
{
	if(editing) return;
	var id = getUrlParameter("event");
	$.ajax(
	{
		url: "./bin/guest/fetch1.php",
		method: "GET",
		data:
		{
			id:id,
			search:search,
			limit:limit
		},
		cache: false,
		success: function (data)
		{
			$("#guestList").html(data);
			$('tr').fadeIn("slow");
		}
	});
}

function cancelEdit()
{
	var id = $("input#editId").val();
	$.ajax(
	{
		url: "./bin/guest/fetch2.php",
		method: "GET",
		data:
		{
			id:id
		},
		cache: false,
		success: function (data)
		{
			var response = ((JSON && JSON.parse(data)) || $.parseJSON(data));
			var element = "tr#entry_" + id;
			$(element).html("<td>" + id + "</td><td>" + response.name + "</td><td><a href='mailto:" + response.email + "'>" + response.email + "</a></td><td>" + response.phone + "</td><td>" + response.address + "</td><td>" + response.register + "</td>");
			$(element).append("<td align='center'><a class='btn-sm btn-success' href='#'><span class='glyphicon glyphicon-print' aria-hidden='true'></span></a> <a class='btn-sm btn-info' href='#'><span class='glyphicon glyphicon-pencil' onclick='editGuest($id)' aria-hidden='true'></span></a> <a class='btn-sm btn-danger' onclick='deleteGuest($id)' href='#'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>");
			editing = false;
			$("a#addGuestButton").removeProp("disabled");
			$('input#search').removeProp("disabled");
			$('select#limit').removeProp("disabled");
		}
	});
}

function saveEdit()
{
	var id = $("input#editId").val();
	var name = $("input#editName").val();
	var email = $("input#editEmail").val();
	var phone = $("input#editPhone").val();
	var address = $("textarea#editAddress").val();
	$.ajax(
	{
		url: "./bin/guest/update.php",
		method: "POST",
		data:
		{
			id:id,
			name:name,
			email:email,
			phone:phone,
			address:address
		},
		cache: false,
		success: function (data)
		{
			var element = "tr#entry_" + id;
			$(element).html(data);
			editing = false;
			$("a#addGuestButton").removeProp("disabled");
			$('input#search').removeProp("disabled");
			$('select#limit').removeProp("disabled");
		}
	});
}

function editGuest(id)
{
	if(editing) return;
	editing = true;
	$("a#addGuestButton").prop("disabled","disabled");
	$('input#search').prop("disabled","disabled");
	$('select#limit').prop("disabled","disabled");
	$.ajax(
	{
		url: "./bin/guest/fetch2.php",
		method: "GET",
		data:
		{
			id:id
		},
		cache: false,
		success: function (data)
		{
			var response = ((JSON && JSON.parse(data)) || $.parseJSON(data));
			var element = "tr#entry_" + id;
			$(element).html("<form id='editGuest'><td>" + id + "<input type='hidden' id='editId' value='" + id + "'></td>");
			$(element).append("<td><input type='text' class='form-control input-sm' id='editName' value='" + response.name + "' required></td>");
			$(element).append("<td><input type='text' class='form-control input-sm' id='editEmail' value='" + response.email + "' required></td>");
			$(element).append("<td><input type='text' class='form-control input-sm' id='editPhone' value='" + response.phone + "'></td>");
			$(element).append("<td><textarea class='form-control input-sm' id='editAddress'>" + response.address + "</textarea></td>");
			$(element).append("<td>" + response.register + "</td>");
			$(element).append("<td align='center'><a href='#' onclick='saveEdit()' class='btn-sm btn-success'><span class='glyphicon glyphicon-floppy-disk' aria-hidden='true'></span></a> <a href='#' class='btn-sm btn-danger' onclick='cancelEdit(" + id + ")'><span class='glyphicon glyphicon-floppy-remove' aria-hidden='true'></span></a></td></form>");
		}
	});
}

function deleteGuest(id)
{
	$.ajax(
	{
		url: "./bin/guest/delete.php",
		method: "POST",
		data:
		{
			id:id
		},
		cache: false,
		success: function (data)
		{
			listGuest();
		}
	});
}

function printQR(id)
{
	$.ajax(
	{
		url: "./bin/guest/fetch3.php",
		method: "GET",
		data:
		{
			id:id
		},
		cache: false,
		success: function (data)
		{
			var response = ((JSON && JSON.parse(data)) || $.parseJSON(data));
			sendToPrinter(response.code,response.name);
		},
		error: function()
		{
			alert("Unable to connect to printer!");
		}

	});
}

function sendToPrinter(code,name)
{
	$.ajax(
	{
		url: "http://192.168.101.1/print.php",
		method: "GET",
		data:
		{
			code:code,
			name:name
		},
		cache: false,
		success: function (data) { }
	});
}

$('form#addGuestForm').submit(function (e)
{
	e.preventDefault();

	var id = getUrlParameter("event");
	var name = $('input#name').val();
	var email = $('input#email').val();
	var phone = $('input#phone').val();
	var address = $('textarea#address').val();

	$.ajax(
		{
			url: "./bin/guest/submit.php",
			method: "POST",
			data:
			{
				id:id,
				name:name,
				email:email,
				phone:phone,
				address:address
			},
			cache: false,
			success: function (data)
			{
				$('form#addGuestForm').trigger('reset');
				$('#addGuestModal').modal('hide');
				listGuest();
			}
		});
});

$('input#file').change(function(e)
{
	file = e.target.files;
});

$('form#importGuestForm').submit(function (e)
{
	e.preventDefault();

	var data = new FormData();
	var id = getUrlParameter("event");
	$.each(file,function(key,value)
	{
		data.append(key,value);
	});

	var url = "./bin/guest/upload.php?event=" + id;

	$.ajax(
		{
			url: url,
			method: "POST",
			data: data,
			cache: false,
			processData: false,
			contentType: false,
			success: function (data)
			{
				$('form#importGuestForm').trigger('reset');
				$('#importGuestModal').modal('hide');
				listGuest();
			}
		});
});

$('input#search').keyup(function()
{
	search = $(this).val();
	listGuest();
});

$('select#limit').change(function()
{
	limit = $(this).val();
	listGuest();
});

$('#myTab a').click(function (e)
{
	e.preventDefault();
	$(this).tab('show');
});

$('#loading-example-btn').click(function ()
{
	var btn = $(this);
	btn.button('loading');
});