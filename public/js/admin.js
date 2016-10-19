$(document).ready(function(){
  var win = $( window );

  function place(){
    var hd = $( "header" ).height() + 10;
    $( "section" ).css( "margin-top" , hd + "px" );
  }

  place();

  win.on( "resize" , function(){
    place();
  });

  win.on( "scroll" , function(){
    if($( this ).scrollTop() > 120){
      $( ".topBtn" ).fadeIn( "500" );
    } else {
      $( ".topBtn" ).fadeOut( "500" );
    }
  });

  $( ".topBtn" ).on( "click" , function(){
    $( this ).parent().slideUp( "slow" );
  });

  $( "[data-toggle='tooltip']" ).tooltip();

  $( "[data-toggle='modal']" ).on( "click" , function(){
    if($( this ).closest( "div.tab-pane" ).attr( "id" ) != "pend"){
      $( "fieldset" ).css( "display" , "none" );
    }
    // else if
    //   ($( this ).closest( "div.tab-pane" ).attr( "id" ) == "all")
    //   && ($( this ).closest( "div.tab-pane" ).find( ".state" ).html() == ""))
    //   {
    //   $( "fieldset" ).css( "display" , "block" );
    // }
    else {
      $( "fieldset" ).css( "display" , "block" );
    }
  });
});
