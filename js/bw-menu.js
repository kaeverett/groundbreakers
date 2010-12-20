// bw-menu.js
// simple dynamic menu
//
// by Bill Weinman  http://bw.org/
// Copyright (c) 2009 BHG LLC
//
// Version 1.0.2
// Created for Dynamic Menus course at lynda.com
//

// configuration variables
var timeout   = 250; // milliseconds
var fadeSpeed = 200;  // milliseconds
var useFade   = true;

// timers array
var timers = new Array();

// state array -- by id, value = active, false = inactive
var state = new Array();

// lastOpacity: used to prevent multiple timers from making the fade flicker
var lastOpacity = new Array();

// MSIE has its own way of setting opacity, so we have to detect it
// all the other major browsers support the standard DOM opacity property
var msie = false;
if( navigator.appName == "Microsoft Internet Explorer" ) msie = true;

// entry point: set element to visible and clear its timers
function setMenu( id )
{
    var e = document.getElementById(id);
    e.style.visibility = "visible";
    state[id] = true;
    setOpacity( id, 1 );
    if(timers[id]) {
        clearTimeout(timers[id]);
        timers[id] = undefined;
     }
}

// set element to hidden and reset its opacity
// typically called by a timer
// may be used as an entry point to bypass timers and fades
function hideMenu( id )
{
    var e = document.getElementById(id);
    state[id] = false;
    e.style.visibility = "hidden";
    if(useFade) setOpacity( id, 1 );
}

// entry point: hide the menu using fade (if enabled)
function clearMenu( id )
{
    if(useFade) timers[id] = setTimeout( 'fadeMenu( "' + id + '" )', timeout );
    else timers[id] = setTimeout( 'hideMenu( "' + id + '" )', timeout );
}

// set the opacity
// special support for MSIE
function setOpacity( id, value )
{
    var e = document.getElementById(id);

    if(state[id]) value = 1;    // menu fade was interrupted
    else if(lastOpacity[id] && (lastOpacity[id] < value)) value = lastOpacity[id];  // prevents flicker if multiple timers set
    
    if(msie) e.style.filter = 'alpha(opacity=' + value * 100 + ')'; // MS Internet Explorer
    else e.style.opacity = (value);     // Everyone else (standard DOM)

    if( value == 0 ) hideMenu( id );    // when all faded, reset the menu state
    lastOpacity[id] = value;
}

// fade a menu
// typically called by a timer
function fadeMenu ( id )
{
    var start = 0;
    var end = 0;
    var s = Math.round( fadeSpeed / 25 );   // fade in 25ms increments
    var timer = 0;
    var i;

    state[id] = false;

    for( i = s; i >= 0 ; i-- ) {
        setTimeout( "setOpacity('" + id + "'," + ( i / s ) + ")", timer++ * fadeSpeed / s )
    }
}

