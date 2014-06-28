
<html>
<head>
<script src="sowkat.js">

</script>
<?php

$mam = array("aysha","zerin","nabila","liana");
$sir = array("pl1"=>"jitu", "pl2"=>"hafij");
$a=$sir["pl2"];
$m=$mam[0];
echo $a;
echo "<br/><br/>";
echo $m;
echo "<br/><br/>";
$sirdetails=print_r($sir ,true);
echo $sirdetails;
echo "<br/><br/>";
print_r($mam);
echo "<br/><br/>";
$mamslice=array_slice($mam, 1);
print_r($mamslice);
echo "<br/><br/>";
echo count($mam);
echo "<br/><br/>";
$lastmam =count($mam)-1;
echo $mam[$lastmam];
echo "<br/><br/>";
echo "<p>the current element is:  ".current($sir)."</p>";
echo "<p>the next element is:  ".next($sir);
echo "<p>and its element is:  ".key($sir);
echo "<p>the next element is:".next($sir);
echo "<p>the previous element is:".prev($sir);
echo "<p>the first element is:".reset($sir);
echo "<p>the last element is:".end($sir);
echo "<br/><br/>";

?>

</head>
<body>
<input type="button" onclick="a()" value="click me">
</body>
</html>