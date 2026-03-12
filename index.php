<?php 

$valtozo_nev = "ertek";
echo $valtozo_nev . "<br>";

$nev = "Jani";
echo "Szia, " . $nev . "!<br>";
echo "Szia, $nev!<br>";

$szam = 42;
function szam_dupla(){
    global $szam;
    return $szam * 2;
}

$nev = "alma";
$$nev = "piros";
echo $alma . "<br>";

$adat = ["nev" => "Lacika", "kor" => 25];
echo "<pre>";
var_dump($adat);
echo "</pre>";

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

echo osszead(5, 7) . "<br>";

$jegy = 4;

if ($jegy == 5) {
    echo "Kiváló<br>";
} elseif ($jegy == 4) {
    echo "jó<br>";
} elseif ($jegy == 3) {
    echo "közepes<br>";
} elseif ($jegy == 2) {
    echo "elégséges<br>";
} elseif ($jegy == 1) {
    echo "elégtelen<br>";
} else {
    echo "Hibás jegy!<br>";
}

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,DELETE,PUT");
header("Access-Control-Allow-Headers: Content-Type");

$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case 'GET':
    $response = [
        "status" => "success",
        "message" => "GET request received",
        "code" => 200,
        "data" => [
            "id" => 1,
            "name" => "John Doe",
            "email" => "john.doe@example.com"
        ]
    ];
    echo json_encode($response);
    break;

case 'POST':
    $input = json_decode(file_get_contents("php://input"), true);
    $response = [
        "status" => "success",
        "message" => "POST request received",
        "code" => 200,
        "data" => $input
    ];
    echo json_encode($response);
    break;

    default:
        echo "<br>" . json_encode(["message" => "Unsupported request method"]);
        break;
}

?>