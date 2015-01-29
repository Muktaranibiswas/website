<?php

// Event setup using the `.on()` method with data
$( "input" ).on(
    "change",
{ foo: "bar" }, // Associate data with event binding
function( eventObject ) {
    console.log("An input value has changed! ", eventObject.data.foo);
}
);
?>