<style>
    table { border: 1px; }
    .table { display: block; width: 600px}
    .td { displey: block; float: left; width: 100px}
    td { padding: 5px; text-align: left; border: 1px solid black; }
</style>
<?php

$rows = 10;
$cols = 10;


echo "<table class='table'>";
echo "<tr>";

for ($tr = 1; $tr <= $rows; $tr++) {
    echo "<td class='td'>";
    for ($td = 1; $td <= $cols; $td++) {
        $product = $td*$tr;
        print_r($tr . " &#215 " . $td . " = " . $td*$tr . "<br>");
    }

    echo '</td>';
}

echo "</tr>";
echo "</tabele>";
