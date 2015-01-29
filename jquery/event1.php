
<?php



$( "a" ).click(function( eventObject ) {
var elem = $( this );
if ( elem.attr( "href" ).match( /evil/ ) ) {
eventObject.preventDefault();
elem.addClass( "evil" );
}
});