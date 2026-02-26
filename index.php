

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

?>