<?php

// Traccia 1

$age = 24;
$temp = 21.6;
$name = "Daniele";
$dev = true;

/* var_dump($age);
var_dump($temp);
var_dump($name);
var_dump($dev); */

const AGE = 24;
const TEMP = 21.6;
const NAME = "Daniele";
const DEV = true;

/* var_dump(AGE);
var_dump(TEMP);
var_dump(NAME);
var_dump(DEV); */

// Traccia 2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perché";
$text6 = "text2";
$text7 = "bevuto";
$text8 = "tutto";

echo $text1 ." ". $text2 ." ". $text3 . $text4 ." ".$text5 ." ".$text2 ." ". $text7 ." ". $text8 . "." . "\n";

// Traccia 3

$words1 = ['una', 67, 'vita', 'colle', 'mi', 'rosso', 
    ['oscura', 'era', 89, 
        ['mezzo', 
            ['cammin', 'Nel', 
                ['selva', 'la',
                    ['via', 'una', true,
                    ]
                ],
            ]
        ], 'ritrovai', 'per'], 'diritta'];
   
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
     'Virgilio',
     'smarrita',
     'ché'
    ]
   ];

$result =  $words1[6][3][1][1]/* NEL */." ".$words1[6][3][0]/* MEZZO */." del ".$words1[6][3][1][0]/* CAMMIN */." di ".$words2['elemento2']/* NOSTRA */." ".$words1[2]/* VITA */." ".$words1[4]/* MI */." ".$words1[6][4]/* RITROVAI */." ".$words1[6][5]/* PER */." ".$words1[0]/* UNA */." ".$words1[6][3][1][2][0]/* SELVA */." ".$words1[6][0]/* OSCURA */. ", ".$words2['elemento3'][2]/* CHÉ */." ".$words1[6][3][1][2][1]/* LA */." ".$words1[7]/* DIRITTA */." ".$words1[6][3][1][2][2][0]/* VIA */." ".$words1[6][1]/* ERA */." ".$words2['elemento3'][1]/* SMARRITA */;

var_dump($result);
/* “Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita“. */

?>