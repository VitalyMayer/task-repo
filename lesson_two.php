<style>
    table { border: 1px; }
    .table { display: block; width: 600px}
    .td { displey: block; float: left; width: 100px}
    td { padding: 5px; text-align: left; border: 1px solid black; }
    .black { color: black }
    .red { color: red }
    .green { color: green }
    .yellow { color: yellow }
    .blue { color: blue }
    .purple { color: purple }
    .brown { color: brown }
    .maroon { color: maroon }
    .violet { color: violet }
    .aqua { color: aqua }
</style>

<?php
function coloring($n) {
    $n = str_split($n);
    foreach ($n as &$i) {
        switch ($i) {
            case 0:
                $i = "<span class='black'>$i</span>";
                break;
            case 1:
                $i = "<span class='red'>$i</span>";
                break;
            case 2:
                $i = "<span class='green'>$i</span>";
                break;
            case 3:
                $i = "<span class='yellow'>$i</span>";
                break;
            case 4:
                $i = "<span class='blue'>$i</span>";
                break;
            case 5:
                $i = "<span class='purple'>$i</span>";
                break;
            case 6:
                $i = "<span class='brown'>$i</span>";
                break;
            case 7:
                $i = "<span class='maroon'>$i</span>";
                break;
            case 8:
                $i = "<span class='violet'>$i</span>";
                break;
            case 9:
                $i = "<span class='aqua'>$i</span>";
                break;
        }
    }
    $n = implode($n);
    return $n;
}

$rows = 10;
$cols = 10;


echo "<table class='table'>";
echo "<tr>";

for ($tr = 1; $tr <= $rows; $tr++) {
    echo "<td class='td'>";
    for ($td = 1; $td <= $cols; $td++) {
        $product = $td*$tr;
        print_r(coloring($tr) . " &#215 " . coloring($td) . " = " . coloring($td*$tr) . "<br>");
    }

    echo '</td>';
}

echo "</tr>";
echo "</tabele>";
