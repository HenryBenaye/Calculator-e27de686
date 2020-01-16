<?php

echo "Welke operatie wil je uitvoeren? (+, -)".PHP_EOL;
$keuze = readline("");
echo "Eerste getal".PHP_EOL;
$eersteGetal = readline("");
echo " Tweede getal?".PHP_EOL;
$tweedeGetal = readline("");



if($keuze == "+"){
    $antwoord = $eersteGetal + $tweedeGetal;
    $antwoord;
    
    echo "Uw antwoord:".$antwoord;
    
}
else if($keuze == "-"){
    $antwoord = $eersteGetal - $tweedeGetal;
    $antwoord;
    echo "Uw antwoord:".$antwoord;
    
}



