<?php




function encode_phrase ($phraseC, $encodeC) {
    $codePhrase = "";
    $alphabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    $phraseC = strtolower($phraseC);
    for ($i = 0; $i < strlen($phraseC); $i++) {
        if ($phraseC[$i] == " ") {
            $codePhrase = $codePhrase . " ";
        } else {
            for($j = 0; $j < count($alphabet); $j++) {
                if ($phraseC[$i] == $alphabet[$j]) {
                    $numCode = $j + $encodeC;
                    $numAlphabet = count($alphabet) - 1;             
                    if ($numCode > $numAlphabet) {
                        $extraAlphabet = $numCode - $numAlphabet - 1;
                        $codePhrase = $codePhrase . $alphabet[$extraAlphabet];
                    } else {
                        $codePhrase = $codePhrase . $alphabet[$numCode];
                    }
                }
            }
        }
    }
    return $codePhrase;
}


?>