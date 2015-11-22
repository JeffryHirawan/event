var field = 'id';
var order = 'ASC';
var limit = 10;
var search = '';
var editing = false;

function fetchStaff()
{
	if(editing) return;
	$.ajax(
		{
			url: "./bin/staffs/fetch1.php",
			type: "GET",
			data: {
				field: field,
				order: order,
				limit: limit,
				search: search
			},
			cache: false,
			success: function(data)
			{
				$('#staffList').html(data);
				$('tr').fadeIn("slow");
			},
			error: function()
			{
			}
		});
}

function addStaff()
{
	if(editing) return;

	var user = $("input#newname").val();
	var group = $("select#newgroup").val();
	var email = $("input#newemail").val();

	$.ajax(
		{
			url: "./bin/staffs/submit.php",
			type: "POST",
			data: {
				user: user,
				group: group,
				email: email
			},
			cache: false,
			success: function(data)
			{
				fetchStaff();
			},
			error: function()
			{
			}
		});
}

function editStaff(id)
{
	if(editing) return;
	$.ajax(
		{
			url: "./bin/staffs/fetch2.php",
			type: "GET",
			data: {
				id: id
			},
			cache: false,
			success: function(data)
			{
				var response = ((JSON && JSON.parse(data)) || $.parseJSON(data));
				var element = "#entry_" + id;
				$(element).html("<form id='editStaff'><td>" + id + "<input type='hidden' id='id' value='" + id + "'></td>");
				$(element).append("<td><input type='text' class='form-control input-sm' id='name' value='" + response.name + "' required></td>");
				$(element).append("<td><select class='form-control input-sm' id='group'><option value='User' " + ((response.group == 'User') ? "selected" : "") + ">User</option><option value='Operator' " + ((response.group == 'Operator') ? "selected" : "") + ">Operator</option><option value='Moderator' " + ((response.group == 'Moderator') ? "selected" : "") + ">Moderator</option></select></td>");
				$(element).append("<td><input type='email' class='form-control input-sm' id='email' value='" + response.email + "' required></td>");
				$(element).append("<td align='center'><a href='#' onclick='saveEdit()' class='btn-sm btn-success'><span class='glyphicon glyphicon-floppy-disk' aria-hidden='true'></span></a> <a href='#' class='btn-sm btn-danger' onclick='cancelEdit(" + id + ")'><span class='glyphicon glyphicon-floppy-remove' aria-hidden='true'></span></a></td></form>");
				editing = true;
			},
			error: function()
			{
			}
		});
}

function cancelEdit(id)
{
	$.ajax(
		{
			url: "./bin/staffs/fetch3.php",
			type: "GET",
			data: {
				id: id
			},
			cache: false,
			success: function(data)
			{
				var element = "#entry_" + id;
				$(element).html(data);
				editing = false;
			},
			error: function()
			{
			}
		});
}

function saveEdit()
{
	var id = $("input#id").val();
	var name = $("input#name").val();
	var group = $("select#group").val();
	var email = $("input#email").val();
	$.ajax(
		{
			url: "./bin/staffs/update.php",
			type: "POST",
			data: {
				id: id,
				name: name,
				group: group,
				email: email
			},
			cache: false,
			success: function(data)
			{
				cancelEdit(id);
			},
			error: function()
			{
			}
		});
}

function deleteStaff(id)
{
	if(editing) return;
	$.ajax(
		{
			url: "./bin/staffs/delete.php",
			type: "POST",
			data: {
				id: id
			},
			cache: false,
			success: function(data)
			{
				fetchStaff();
			},
			error: function()
			{
			}
		});
}

window.onload = function()
{
	fetchStaff();
};
$('#search').keyup(function()
{
	search = $('input#search').val();
	fetchStaff();
});
$('#limit').change(function()
{
	limit = $('select#limit').val();
	fetchStaff();
});
$('#colId').click(function()
{
	if(field != 'id')
	{
		field = 'id';
	}
	else
	{
		order = ((order == 'ASC') ? ('DESC') : ('ASC'));
	}
	fetchStaff();
});
$('#colName').click(function()
{
	if(field != 'username')
	{
		field = 'username';
	}
	else
	{
		order = ((order == 'ASC') ? ('DESC') : ('ASC'));
	}
	fetchStaff();
});
$('#colGroup').click(function()
{
	if(field != 'group')
	{
		field = 'group';
	}
	else
	{
		order = ((order == 'ASC') ? ('DESC') : ('ASC'));
	}
	fetchStaff();
});
$(document).ready(function()
{
	$('.templatemo-sidebar-menu li.sub a').click(function()
	{
		if($(this).parent().hasClass('open'))
		{
			$(this).parent().removeClass('open');
		}
		else
		{
			$(this).parent().addClass('open');
		}
	});
});

$('#myTab a').click(function(e)
{
	e.preventDefault();
	$(this).tab('show');
});

$('#loading-example-btn').click(function()
{
	var btn = $(this);
	btn.button('loading');
});