<?php
if ($_GET['x'] == '' || $_GET['y'] == '' || $_GET['z'] == '' || $_GET['word'] == '' || $_GET['number'] == '') {
header('location: add.html');
} else {


$file = 'arr.php';
$filearr = file_get_contents($file);

$datastart = substr($filearr, 0, -6);



$md5number = md5($_GET['number']);
$md5word = md5($_GET['word']);
$varx = $_GET['x']-$_GET['number'];
$vary = $_GET['y']-$_GET['number'];
$varz = $_GET['z']-$_GET['number'];


$quotes = '"';
$comma = ',';

$add = "\n\n\n\n\n[\n".$quotes.$md5number.$quotes.$comma."\n".$quotes.$md5word.$quotes.$comma."\n".$quotes.$varx.$quotes.$comma."\n".$quotes.$vary.$quotes.$comma."\n".$quotes.$varz.$quotes.$comma."\n"."],\n\n\n\n\n";

$end = "\n\n\n\n\n\n];\n?>";
$data = $datastart.$add.$end;
file_put_contents($file, $data, LOCK_EX);

}
?>
<html>
<head>
<meta charset="utf-8">
<script>
sec = 0;
function init() {
setInterval(tick, 1000);
}
function tick() {
sec++;
document.getElementById("sec").childNodes[0].nodeValue = sec;
if (sec == 4) {
location.href = 'add.html';
}
}
init();
</script>
<title>add TSB</title>
<link rel="stylesheet" type="text/css" href="indexstyle.css">
</head>
<body align="center" bgcolor="#8585fc">
<div align="center">

<br>
Please wait three seconds<br>
<span id="sec">0</span>
</div>
</body>
</html>
