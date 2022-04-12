<?php 


$montantUser = ($_GET["montantEU"]);

if ($_GET["choice-devise"] == 'dollars') {
    $result = $montantUser * 1.20;
    $deviseConvertis = "dollars";
}
else if ($_GET["choice-devise"] == 'euros') {
    $result = $montantUser * 0.83;
    $deviseConvertis = "euros";
}

else if ($_GET["choice-devise"] == 'yens') {
    $result = $montantUser * 131.36;
    $deviseConvertis = "euros";
}

?>