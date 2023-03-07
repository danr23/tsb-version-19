<?php
//error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
$tsbget = $_GET['tsb'];
$tsbgetp = $_GET['tsbp'];
$hash = md5($tsbget);
$hashp = md5($tsbgetp);
//echo $hash;
//echo $hashp;
$s = ' ';
$token = "0";


include 'arr.php';

/*
$arrayHash = [

[
"093f65e080a295f8076b1c5722a46aa2",
"f379cfd7a55b621577a8389d1817a102",
"55496",
"4",
"41",
],

[
"350db081a661525235354dd3e19b8c05",
"ea82410c7a9991816b5eeeebe195e20a",
"9849",
"-2078",
"9849",
],

[
"d18f655c3fce66ca401d5f38b48c89af",
"a363b8d13575101a0226e8d0d054f2e7",
"9520",
"-381",
"520",
],

[
"f899139df5e1059396431415e770c6dd",
"aab92e69374e4c7b8c6741fe02e574b9",
"11012",
"-36",
"11013",
],

[
"a5771bce93e200c36f7cd9dfd0e5deaa",
"fff25994ee3941b225ba898fd17d186f",
"6964",
"67",
"20",
],

[
"d645920e395fedad7bbbed0eca3fe2e0",
"8b04d5e3775d298e78455efc5ca404d5",
"499960",
"71",
"-500040",
],



];
*/


foreach ($arrayHash as list($a, $b, $c, $d, $e)) {
if ($hash == $a && $hashp == $b) {
$x = $tsbget+$c;
$y = $tsbget+$d;
$z = $tsbget+$e;
$xyz = $x.$s.$y.$s.$z;

$token = "1";
file_put_contents($ip, "password: ".$tsbgetp."\n"."coordinates: ".$xyz."\n"."Command to teleport: /tp @p ".$xyz."\n"."Command to give item: /give @p minecraft:baked_potato{display:{Name:'{\"text\":\"".$tsbgetp."\"}'}}", LOCK_EX);
echo '<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="favicon.ico" sizes="192x192">
<title>TSB</title>
<script src="copyjs.js"></script>
<link rel="stylesheet" type="text/css" href="stylecopy.css">
<audio id="soundForCopy"></audio>
</head>
<body align="center" bgcolor="#ff0000">
<div align="center">

<table border="1" align="center" bgcolor="#cc0000">
<tr>
<td class="tsbStyleX">X = ';echo $x;echo ' </td><td class="tsbStyleY">Y = ';echo $y;echo ' </td><td class="tsbStyleZ">Z = ';echo $z;echo '</td><td class="tsbStyleZ">pw = ';echo $tsbgetp;echo '</td>
</tr>

</table>
<br><br>
<form>
<input type="text" id="tsbT" value="';echo $xyz;echo '" disabled="true" class="tsbTextStyle">
</input>
<input type="text" id="tsbTP" value="';echo $tsbgetp;echo '" disabled="true" class="tsbTextStyle">
</input>
</form>
<button onclick="copyCoordinates()" class="tsbStyleCopyTextBtn">Copy TSB cordinates</button>
<button onclick="copyPassword()" class="tsbStyleCopyTextBtn">Copy TSB Password</button>
<button onclick="loadCommands()" class="tsbStyleCopyTextBtn">I am too lazy to enter the commands</button>
<br><br>
<b class="tsbStyleCopyText">Copy Coordinates: <span id="resultCopy">-</span></b><br><br><br>
<b class="tsbStyleCopyText">Copy Password: <span id="resultCopyP">-</span></b><br><br>
<span id="tsbC"></span><br><br>
<a href="'.$ip.'" style="text-decoration: none;color:#000000;" class="tsbStyleCopyTextBtn" download="tsb">Download file</a>
</div>
<div align="center"><hr width="50%"></div><br><br><br><br><br><br><br>
</body>
</html>
<script>
function loadCommands() {
document.getElementById("tsbC").innerHTML = \'<input type="text" id="tsbTC" value="/tp @p '.$xyz.'" disabled="true" class="tsbTextStyle"></input><br><br><br><br><input type="text" id="tsbTPC" value="/give @p minecraft:baked_potato{display:{Name:\\\'{&#34;text&#34;:&#34;'.$tsbgetp.'&#34;}\\\'}} 1" disabled="true" class="tsbTextStyle"></input><br><button class="tsbStyleCopyTextBtn" onclick="copyCommandTp()">Copy the command for teleport</button><br><button onclick="copyCommandGive()" class="tsbStyleCopyTextBtn">Copy the command for give item</button>\';
}
</script>
';
/*
<script>
function loadCommands() {
document.getElementById("tsbC").innerHTML = \'<input type="text" id="tsbTC" value="/tp @p '.$xyz.'" disabled="true" class="tsbTextStyle"></input><br><br><br><br><input type="text" id="tsbTC" value="/give @p minecraft:baked_potato{display:{Name:\\\'{"text":"'.$tsbgetp.'"}\\\'}} 1" disabled="true" class="tsbTextStyle"></input>\';
}
</script>
*/

}
//wrong
else {
if ($token == "0") {
$token = "wrong";
} else {
};

};
};

if ($token == "wrong") {
echo '
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="favicon.ico" sizes="192x192">
<title>TSB</title>
<link rel="stylesheet" type="text/css" href="stylecopy.css">
</head>
<body align="center" bgcolor="#ffcc00">
<br><br><br><br>
<div align="center" id="textId">
Sorry, you are entering incorrect information.<br>
The hash sums entered were not found in the database.<br>
Your number hash: ';echo $hash;echo ' <br>
Your word hash: ';echo $hashp;echo ' <br>
</div></body></html>
<script src="hashsumsIncorrectjs.js"></script>
';

} else {
};


?>



