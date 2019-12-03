function $(elid){ /* shortcut for d.gEBI */
    return document.getElementById(elid);
}

var cursor; /* global variable */
window.onload = init;

function init(){
    cursor = $("cursor"); /* defining the global var */
    cursor.style.left = "0px"; /* setting it's position for future use */
}

function nl2br(txt){ /* helper, textarea return \n not <br /> */
    return txt.replace(/\n/g, "<br />");
}

function writeit(from, e){ /* the magic starts here, this function requires the element from which the value is extracted and an event object */
    e = e || window.event; /* window.event fix for browser compatibility */
    var w = $("writer"); /* get the place to write */
    var tw = from.value; /* get the value of the textarea */
    w.innerHTML = nl2br(tw); /* convert newlines to breaks and append the returned value to the content area */
}

function moveIt(count, e){ /* function to move the "fake caret" according to the keypress movement */
    e = e || window.event; /* window.event fix again */
    var keycode = e.keyCode || e.which; /* keycode fix */
//				alert(count); /* for debugging purposes */
    if(keycode == 37 && parseInt(cursor.style.left) >= (0-((count-1)*10))){ // if the key pressed by the user is left and the position of the cursor is greater than or equal to 0 - the number of words in the textarea - 1 * 10 then ...
        cursor.style.left = parseInt(cursor.style.left) - 10 + "px"; // move the cursor to the left
    } else if(keycode == 39 && (parseInt(cursor.style.left) + 10) <= 0){ // otherwise, if the key pressed by the user if right then check if the position of the cursor + 10 is smaller than or equal to zero if it is then ...
        cursor.style.left = parseInt(cursor.style.left) + 10 + "px"; // move the "fake caret" to the right
    }

}

function alert(txt){ // for debugging
console.log(txt); // works only with firebug
}