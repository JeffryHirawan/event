window.onload = function()
{
    $('#starttime').datetimepicker(
    {
        format: 'HH:mm'
    });
    $('#startdate').datetimepicker(
    {
        format: 'YYYY-MM-DD'
    });
    $('#endtime').datetimepicker(
    {
        format: 'HH:mm'
    });
    $('#enddate').datetimepicker(
    {
        format: 'YYYY-MM-DD'
    });
    $("#startdate").on("dp.change", function (e)
    {
        $('#enddate').data("DateTimePicker").minDate(e.date);
    });
    $("#enddate").on("dp.change", function (e)
    {
        $('#startdate').data("DateTimePicker").maxDate(e.date);
    });
    $("#starttime").on("dp.change", function (e)
    {
        $('#endtime').data("DateTimePicker").minDate(e.date);
    });
    $("#endtime").on("dp.change", function (e)
    {
        $('#starttime').data("DateTimePicker").maxDate(e.date);
    });
    $.ajax(
    {
        url:"./bin/addevent/fetch.php",
        cache:false,
        success:function(data)
        {
            $('select#eventPic').html("<option>No PIC</option>" + data);
        }
    });
};

$('form#eventForm').submit(function (e)
{
    e.preventDefault();

    var name = $("input#eventName").val();
    var type = $("input#eventType").val();
    var mode = $("select#eventMode").val();
    var pic = $("select#eventPic").val();
    var startdate = $("input#eventStartDate").val();
    var enddate = $("input#eventEndDate").val();
    var starttime = $("input#eventStartTime").val();
    var endtime = $("input#eventEndTime").val();

    $.ajax(
    {
        url:"./bin/addevent/submit.php",
        method:"POST",
        cache:false,
        data:
        {
            name:name,
            type:type,
            mode:mode,
            pic:pic,
            startdate:startdate,
            enddate:enddate,
            starttime:starttime,
            endtime:endtime
        },
        success:function(data)
        {
            window.location.replace("allevent.php");
        }
    });
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

$(document).ready( function()
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