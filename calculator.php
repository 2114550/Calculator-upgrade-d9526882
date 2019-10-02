<?php
echo "Wat wil je doen?(+,-,/)".PHP_EOL;
    $var = readline();
    if ($var == "+" or
        $var == "-" or
        $var == "/")
    {
        echo "Eerste getal?".PHP_EOL;
        $a = readline();
        if (is_numeric($a)) {
            echo "Tweede getal?" . PHP_EOL;
            $b = readline();
            if (is_numeric($b)) {
                if ($var == "+") {
                    $c = $a + $b;
                    echo "Antwoord : $c";
                }
                if ($var == "-") {
                    $c = $a - $b;
                    echo "Antwoord : $c";
                }
                if ($var == "/") {
                    $c = $a / $b;
                    echo "Antwoord : $c";
                }
            }
            else {
                exit("Ongeldig" . PHP_EOL);
            }
        }
        else
        {
            exit("Ongeldig" . PHP_EOL);
        }
    }
    else
    {
        exit("Ongeldig".PHP_EOL);
    }
