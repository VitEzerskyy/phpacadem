<?php

$team = array (
    "player1" => array(
        "Number" => "24",
        "Name" => "Cobe Brayant",
        "Position" => "Point Guard",
        "Height" => "198",
        "Weight" => "96"
    ),
    "player2" => array(
        "Number" => "30",
        "Name" => "Randle Julius",
        "Position" => "SmallForward",
        "Height" => "206",
        "Weight" => "113"
    ),
    "player3" => array(
        "Number" => "50",
        "Name" => "Robert Sacre",
        "Position" => "Center",
        "Height" => "213",
        "Weight" => "118"
    ),
    "player4" => array(
        "Number" => "28",
        "Name" => "Tarik Black",
        "Position" => "Power Forward",
        "Height" => "206",
        "Weight" => "117"
    ),
    "player5" => array(
        "Number" => "3",
        "Name" => "Anthony Brown",
        "Position" => "Shooting Guard",
        "Height" => "201",
        "Weight" => "98"
    )
);

foreach ($team as $key => $value) {
    echo "$value[Number] - $value[Name] - $value[Position]($value[Height], $value[Weight])"."\n";
}

//print_r ($team);
?>