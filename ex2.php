<html>
<head><title>foreach clé</title>
</head>
<body>
    <table border=1>
        <tr><th>Nom</th><th>Moyenne</th></tr>
<?php
$tab6 = array('Arij' => 12,
'Mariem' => 15,
"Yassmine" => 10.5,
"Nour" => 13) ;
foreach ($tab6 as $cle => $val)
{
echo "<tr><td>$cle</td><td>$val</td></tr>\n " ;
}
?>
</table>

</body></html>