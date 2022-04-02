<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mose code - result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Result: </p>
    <span>
        <?php
            $txt = $_GET["txt"] ?? "text not defined";
            
            $let_low = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

            $let_cap = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

            $let_morse = array(".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.",
            "...","-","..-","...-",".--","-..-","-.--","--..");

            /* CODE MORSE TRADUCTION -
            : A = .- B = -... C = -.-. D = -.. E = . F ..-. G = --. H = .... I = .. J = .---
            : K = -.- L = .-.. M = -- N = -. O = --- P = .--. Q = --.- R = .-. S = ... T = .
            :                 U = ..- V = ...- W = .-- X = -..- Y = -.-- Z = --..
            */

            $switch_low = str_replace($let_low, $let_morse, $txt);
            $switch_cap = str_replace($let_cap,$let_morse,$switch_low);
            echo "$txt<br>$switch_cap";
        ?> 
    </span>
    <br>
    <a href="index.html"><button>back</button></a>
</body>
</html>

