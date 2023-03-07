counter = 0;
counterP = 0;
colTsbT = new Array("#00aa00", "#00bb00", "#00cc00", "#00dd00", "#00ee00", "#00ff00", "#000000");
colTsbTP = new Array("#00aa00", "#00bb00", "#00cc00", "#00dd00", "#00ee00", "#00ff00", "#000000");
function selectionClear() {
document.getElementById("tsbT").removeAttribute("disabled");
document.getElementById("tsbT").focus();
document.getElementById("tsbT").selectionEnd = 0;
function tsbTColor() {
document.getElementById("tsbT").style.color = colTsbT[counter++];
if (counter > colTsbT.length) counter = 0;
}

setInterval(tsbTColor, 100);
document.getElementById("soundForCopy").setAttribute('src', 'copySounds/coordinates/' + Math.ceil(Math.floor(Math.random()*5)) + '.ogg');
document.getElementById("soundForCopy").setAttribute('autoplay', 'autoplay');
document.getElementById("tsbT").setAttribute("disabled", "true");
}
function copyCoordinates() {
nn = document.getElementById("tsbT").value.length + '00';
nni = Number(nn);
nno = Number(100);
nnse = Number(1);
while (nno < nni || nno == nni){
document.getElementById("tsbT").removeAttribute("disabled");
document.getElementById("tsbT").focus();
document.getElementById("tsbT").selectionStart = 0;
setTimeout(function() {
document.getElementById("tsbT").removeAttribute("disabled");
document.getElementById("tsbT").focus();
document.getElementById("tsbT").selectionEnd = nnse;
document.getElementById("tsbT").setAttribute("disabled", "true");
document.execCommand('copy');
nnse++;
}, nno);
nno = nno + 100;
}
setTimeout(function() {
selectionClear();
document.getElementById("resultCopy").childNodes[0].nodeValue = document.getElementById("tsbT").value;
}, nni+50);

}
function selectionClearPASS() {
document.getElementById("tsbTP").removeAttribute("disabled");
document.getElementById("tsbTP").focus();
document.getElementById("tsbTP").selectionEnd = 0;
function tsbTPColor() {
document.getElementById("tsbTP").style.color = colTsbTP[counterP++];
if (counterP > colTsbTP.length) counterP = 0;
}
setInterval(tsbTPColor, 100);
document.getElementById("soundForCopy").setAttribute('src', 'copySounds/password/' + Math.ceil(Math.floor(Math.random()*5)) + '.ogg');
document.getElementById("soundForCopy").setAttribute('autoplay', 'autoplay');
document.getElementById("tsbTP").setAttribute("disabled", "true");
}
function copyPassword() {
nn = document.getElementById("tsbTP").value.length + '00';
nni = Number(nn);
nno = Number(100);
nnse = Number(1);
while (nno < nni || nno == nni){
document.getElementById("tsbTP").removeAttribute("disabled");
document.getElementById("tsbTP").focus();
document.getElementById("tsbTP").selectionStart = 0;
setTimeout(function() {
document.getElementById("tsbTP").removeAttribute("disabled");
document.getElementById("tsbTP").focus();
document.getElementById("tsbTP").selectionEnd = nnse;
document.getElementById("tsbTP").setAttribute("disabled", "true");
document.execCommand('copy');
nnse++;
}, nno);
nno = nno + 100;
}
setTimeout(function() {
selectionClearPASS();
document.getElementById("resultCopyP").childNodes[0].nodeValue = document.getElementById("tsbTP").value;
}, nni+50);
}
function copyCommandTp() {
let tsbTC = document.getElementById("tsbTC");
tsbTC.removeAttribute('disabled');
tsbTC.focus();
tsbTC.select();
document.execCommand('copy');
tsbTC.setAttribute('disabled', 'true');
}
function copyCommandGive() {
let tsbTPC = document.getElementById("tsbTPC");
tsbTPC.removeAttribute('disabled');
tsbTPC.focus();
tsbTPC.select();
document.execCommand('copy');
tsbTPC.setAttribute('disabled', 'true');
}
