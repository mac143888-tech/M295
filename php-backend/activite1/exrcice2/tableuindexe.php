<?php 
$fruits=["pomme","orange","banane"];
$vide=[];
$uite=range(1,5 );
$fruits[]="kiwi";
$fruits[1]="ANNANAS";
echo count($fruits);
foreach($fruits as $indice=>$fruit){
    echo"$indice:$fruit\n";
}
    