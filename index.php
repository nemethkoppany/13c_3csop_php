<?php 

//Össezgzés
$szamok = [5, 8, 3, 10, 2];

$osszeg = 0;

foreach ($szamok as $szam) {
    $osszeg += $szam;
}

echo " <br>Az összeg: " . $osszeg . "<br>";

//Minimum-maximum
$szamok = [5, 8, 3, 10, 2];

$min = $szamok[0];
$max = $szamok[0];

foreach ($szamok as $szam) {
    if ($szam < $min) {
        $min = $szam;
    }

    if ($szam > $max) {
        $max = $szam;
    }
}

echo "Minimum: $min <br>";
echo "Maximum: $max <br>";

//Lineáris keresés
$szamok = [5, 8, 3, 10, 2];
$keresett = 3;

$talalt = false;

foreach ($szamok as $szam) {
    if ($szam == $keresett) {
        $talalt = true;
        break;
    }
}

if ($talalt) {
    echo "A szám megtalálható.";
} else {
    echo "A szám nincs a tömbben.";
}

// Összegzés tétele
function osszegzes($tomb) {
    $osszeg = 0;
    foreach ($tomb as $ertek) {
        $osszeg += $ertek;
    }
    return $osszeg;
}
 
// Maximális kiválasztás tétele
function maximalisKivalasztas($tomb) {
    $max = $tomb[0];
    $index = 0;
 
    foreach ($tomb as $i => $ertek) {
        if ($ertek > $max) {
            $max = $ertek;
            $index = $i;
        }
    }
 
    return array($max, $index);
}
 
// Buborék rendezés
function buborekRendezes($tomb) {
    $n = count($tomb);
 
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($tomb[$j] > $tomb[$j + 1]) {
                $temp = $tomb[$j];
                $tomb[$j] = $tomb[$j + 1];
                $tomb[$j + 1] = $temp;
            }
        }
    }
 
    return $tomb;
}
 
// Bináris keresés 
function binarisKereses($tomb, $keresett) {
    $bal = 0;
    $jobb = count($tomb) - 1;
 
    while ($bal <= $jobb) {
        $kozep = floor(($bal + $jobb) / 2);
 
        if ($tomb[$kozep] == $keresett) {
            return $kozep;
        }
 
        if ($tomb[$kozep] < $keresett) {
            $bal = $kozep + 1;
        } else {
            $jobb = $kozep - 1;
        }
    }
 
    return -1;
}
 
// Logaritmikus keresés 
function logaritmikusKereses($tomb, $keresett) {
    return binarisKereses($tomb, $keresett);
}
 
 

$tomb = array(5, 3, 8, 1, 4);
 
echo "Összeg: " . osszegzes($tomb) . "<br>";
 
list($max, $index) = maximalisKivalasztas($tomb);
echo "Max érték: $max, index: $index <br>";
 
$rendezett = buborekRendezes($tomb);
echo "Buborék rendezés: ";
print_r($rendezett);
echo "<br>";
 
$keresett = 4;
$index = binarisKereses($rendezett, $keresett);
 
if ($index != -1) {
    echo "Bináris keresés - index: $index <br>";
} else {
    echo "Nem található <br>";
}
?>