function toggle() {
    var obj = document.getElementById('menu');
    if (obj.className == '')
        obj.className = 'hide';
    else
        obj.className = ''
}

function newsLetter() {
    window.open("joinUs.html", "_blank");
}