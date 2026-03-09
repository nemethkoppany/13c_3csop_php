

<?php 


    $valtozo_nev = "ertek";
    echo $valtozo_nev;
    $nev = "Jani";
    echo "Szia, ". $nev."!"; // Szia Jani!
    echo "Szia, $nev!"; // Szia Jani!

    $szam = 42;
    function szam_dupla(){
     global $szam; // A globális változó elérése a függvényen belül   
     return $szam * 2;
    }

    $nev = "alma";
    $$nev = "piros"; // Ez létrehoz egy új változót $alma néven, aminek az értéke piros lesz"
    echo $alma; // Ez kiírja: piros
    $adat = ["nev" => "Lacika", "kor" => 25];
    var_dump($adat);

function szamlalo() {
    static $x = 0;
    $x++;
    echo $x . "<br>";
}

    szamlalo();
    szamlalo();
    szamlalo();



function osszead(int $a, int $b): int {
    return $a + $b;
}

echo osszead(5, 7);

$jegy = 4;

if ($jegy == 5) {
    echo "Kiváló";
} elseif ($jegy == 4) {
    echo "jó";
} elseif ($jegy == 3) {
    echo "közepes";
} elseif ($jegy == 2) {
    echo "elégséges";
} elseif ($jegy == 1) {
    echo "elégtelen";
} else {
    echo "Hibás jegy!";
}

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
?>