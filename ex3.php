<html>
<head>
</head>
<body>
    <table border=1>
        <tr><th>Nom</th><th>Moyenne</th></tr>
<?php
function moyenne ($val){
    if ($val >= 10 )
    $c='green';
    else $c='red';
    return $c; }
$tab6 = array('Arij' => 12,
'Mariem' => 15,
"Yassmine" => 9.5,
"Nour" => 13) ;
foreach ($tab6 as $cle => $val)
{ $c='red';
    if ($val >= 10 )
     $c='green';
echo "<tr bgcolor=$c><td>$cle</td><td>$val</td></tr>\n " ;
}
?>
</table>

</body></html>