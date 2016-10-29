$(function(){
  $("#datepicker").datepicker({
    daysOfWeekDisabled : "0,1",
    format : "dd/mm/yyy",
    startDate : "+1d",
    startView : "+1m",
    datesDisabled : ["03-11-2016"]
  });
  $("#datepicker").datepicker().on( "changeDate",function(event){
    var date = new Date(event.date);
    $( "[name='event_date']" ).val(
      date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + (date.getDate() + 1)
    );
    console.log($( "[name='event_date']" ).val());
  });
});
