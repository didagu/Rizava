$(document).ready(function(){
  $( "ul.list-group>a" ).on( "click" , function(){
    $( this ).css( "background" , "linear-gradient(to bottom,#e6e6e6,#f2f2f2)" );
  });

  $( window ).on( "scroll" , function(){
    if($( this ).scrollTop() > 120)
    {
      $( ".topBtn" ).fadeIn( "500" );
    }
    else
    {
      $( ".topBtn" ).fadeOut( "500" );
    }
  });

  $( "[data-toggle='tooltip']" ).tooltip();

  $( "[data-toggle='modal']" ).on( "click" , function(){
    if($( this ).closest( "div.tab-content-inside" ).attr( "id" ) != "pend")
    {
      alert("It's ok");
      $( "fieldset" ).css( "display" , "none" );
    }
    else
    {
      $( "fieldset" ).css( "display" , "block" );
    }
  });
});
