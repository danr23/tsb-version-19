let cnv = document.getElementById("loadTsb");
let ctx = cnv.getContext('2d');
offsetDash = 0;
sb = 0;
cnv.width = 256;
cnv.height = 256;
ctx.lineWidth = 6;
ctx.strokeStyle = '#353535';
ctx.fillStyle = '#00cf00';
ctx.font = '60px Arial';
ctx.shadowColor = '#00cf00';
ctx.shadowBlur = sb;
ctx.fillText('TSB', 60, cnv.height/2);
ctx.strokeText('TSB', 60, cnv.height/2);
ctx.fill();
ctx.beginPath();
ctx.arc(115, 105, 75, 0, Math.PI*2, true);
ctx.stroke();
setInterval(function() {
ctx.clearRect(0,0,256,256);
sb++;
if (sb == 50) {
sb = 0;
};
ctx.fillStyle = '#fafcfa';
ctx.setLineDash([Math.PI*2,15]);
ctx.lineDashOffset = -offsetDash;
offsetDash++;
if (offsetDash > 115+21) {
offsetDash = 0;
};
ctx.beginPath();
ctx.lineJoin = 'round';
ctx.lineCap = 'round';
ctx.arc(115, 105, 75, 0, Math.PI*2, true);
ctx.fill();
ctx.stroke();
ctx.setLineDash([2,4]);
ctx.lineJoin = 'bevel';
ctx.lineCap = 'butt';
ctx.fillStyle = '#404550';
ctx.shadowBlur = sb;
ctx.fillText('TSB', 60, cnv.height/2);
ctx.strokeText('TSB', 60, cnv.height/2);
}, 10);
function loadTsbT(a, b, c) {
setTimeout(function() {
document.getElementById("loadTsbT").innerHTML = "Loading TSB...";
}, a);
setTimeout(function() {
document.getElementById("loadTsbT").innerHTML = "Loading TSB..";
}, b);
setTimeout(function() {
document.getElementById("loadTsbT").innerHTML = "Loading TSB.";
}, c);
}
loadTsbT(100, 200, 300);
loadTsbT(400, 500, 600);
loadTsbT(700, 800, 900);
setTimeout(function() {
location.href = 'http://192.168.1.2/user/tsb/realIndex.htm';
}, 1050);

