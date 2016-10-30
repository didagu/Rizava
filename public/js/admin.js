$( document ).ready(function(){
  var action = $( "fieldset" );

  $( ".event a" ).on( "click" , function(){
    var id = $( this ).find( "[name='id']" ).attr("value");
    $.ajax("/rec/" + id, {
      beforeSend : function(){
        $( ".loading" ).fadeIn("fast");
      },
      error : function(r,eT,eM){
        $(window).fadeIn(
          "<div class='alert alert-danger' style='position:fixed;width:100%'>" +
          "You ran into an error, Please try again" +
          "</div>"
        )
      },
      success: function(response,status){
        $( ".modal-title h4" ).html(response.company_name);
        $( ".detail .time" ).html(response.event_start + " - " + response.event_end)
        $( ".detail h3" ).html(response.event_name);

        var pay = response.eventPay == "yes" ? "paid" : "free";
        $( ".eventPay" ).html(pay);

        var p = "",ser = [response.video_coverage,response.caterign,response.internet_facility,response.other_services];
        for (var i = 0; i < ser.length;i++){
          if (ser[i]){
            p += ser[i] + "<br>";
          }
        }
        $( ".more-info .ser p").html(p);
        $( ".cat span" ).html(response.event_type);
        $( "#hall" ).html(response.event_space);
        $( ".his p" ).html(response.previous_event);
        $( ".con-info #name" ).html(response.first_name + " " + response.last_name);
        $( ".con-info #email" ).html(response.email_address);
        $( ".con-info #pNo").html(response.phone_number);
        $( ".loading" ).fadeOut("fast");
        $( "#view-more" ).modal();
      }
    });
    $( "form.acc " ).attr( "action" , "/accept/update/" + id);
    $( "form.can " ).attr( "action" , "/cancel/update/" + id);

    action.css( "display" , "none" );
    switch( $( this ).attr( "title" ) ){
      case "Accepted":
        action.css("display","block")
        action.find( "#accept" ).css("display" , "none" );
        action.find( "#cancel" ).css("display" , "inline-block" ).html( "Cancel Event" );
        break;
      case "Past":
      case "Cancelled":
        action.css( "display" , "none" );
      break;
      default:
        action.css( "display" , "block" );
        action.find( "#accept" ).css("display" , "inline-block" ).html( "Accept Event" );
        action.find( "#cancel" ).css("display" , "inline-block" ).html( "Cancel Event" );
    }
  });
});
