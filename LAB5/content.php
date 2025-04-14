<?php
require_once "data.php";
$cag = $_GET['gr'];

if (!$cag || !array_key_exists($cag, $data)) {
    $keys = array_keys($data);
    header("Location: ?gr=" . ($keys[0]));
}

$man = $data[$cag];
foreach($man as $smankey => $smanval) {
    echo "<div class='nav_bar'>" . $smankey . "</div>";
    echo "<div style='padding-bottom:15px;'>";
    foreach($smanval as $prod) {
        echo "<div class='prd_item'>";
        echo $prod;
        echo "</div>";
    }
    echo "<br style='clear:both;'>";
    echo "</div>";
}
?>

<style>
.nav_bar {
    padding: 3px 5px;
    background-color: #036;
    color: white;
    font-weight: bold;
    margin-top: 5px;
}
.prd_item {
    width: 152px;
    height: 40px;
    background-color: #336;
    border: solid 1px white;
    color: white;
    text-align: center;
    padding: 10px 0px;
    margin: 0px 3px 3px 3px;
    float: left;
}
</style>
