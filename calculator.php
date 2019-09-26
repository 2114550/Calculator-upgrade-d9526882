<?php
echo "Wat wil je doen?(+,-,%)".PHP_EOL;
    $var = readline();
    if ($var != "+"."-"."%")
        echo "Niet geldig";
    exit;
echo "Eerste getal?".PHP_EOL;
    $a = readline();
echo "Tweede getal?".PHP_EOL;
    $b = readline();
if ($var == "+")
{
    $c = $a + $b;
    echo "Antwoord : $c";
}
if ($var == "-")
{
    $c = $a - $b;
    echo "Antwoord : $c";
}
if ($var == "%")
{
    $c = $a % $b;
    echo "Antwoord : $c";
}

