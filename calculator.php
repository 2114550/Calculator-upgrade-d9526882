<?php
echo "Wat wil je doen?(+,-,%)".PHP_EOL;
    $var = readline();
    if ($var == "+" or
        $var == "-" or
        $var == "%")
    {
        echo "Eerste getal?".PHP_EOL;
        $a = readline();
        echo "Tweede getal?".PHP_EOL;
        $b = readline();
    }
    else
{
    echo "Antwoord ongeldig".PHP_EOL;
}
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

