<?php
$lines = file('ancor.txt'); //here's the filename
$counter = 1;
foreach ($lines as $line) {
list($a,$b,$c,$ip) = explode('|', $line);
print "<tr bgcolor='#FFFFFF'>
<td>$counter</td>
<td style='display:none;'>$a</td>
<td>$b</td>
<td>$c</td>
<td>$ip</td>
<td><a href='delete.php?u=$line'><button class='btn btn-xs btn-primary'>Hapus</button></a></td>
<td>-----</td>
</tr>";
$counter++;
}
?>