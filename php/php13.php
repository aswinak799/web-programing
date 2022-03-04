<html>
<body bgcolor="violet">

<?php
$name=["spider","bat","super","ant"];

echo "<br> <br>";
echo "name table program";
echo "<br> <br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>";
for ($i=0;$i<4;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
}
echo "</table>";
?>
</body>
</html>


