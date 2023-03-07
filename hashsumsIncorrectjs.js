document.getElementById("textId").style.border = "1px #232323 solid";
document.getElementById("textId").style.borderRadius = "25px";
function setBorder(id, border, time, borderradius) {
setTimeout(function() {
document.getElementById(id).style.border = border;
document.getElementById(id).style.borderRadius = borderradius;
}, time);
}
setBorder("textId", "3px #232323 solid", 100, "23px");
setBorder("textId", "5px #232323 solid", 200, "21px");
setBorder("textId", "7px #232323 solid", 300, "19px");
setBorder("textId", "5px #232323 solid", 400, "21px");
setBorder("textId", "3px #232323 solid", 500, "23px");
setBorder("textId", "1px #232323 solid", 600, "25px");
setBorder("textId", "", 700, "");
