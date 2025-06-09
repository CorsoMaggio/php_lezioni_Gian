<?php
// Creare una variabile di tipo Stringa chiamata $results che stampi sul terminale il testo (rispettando spazi e punteggiature) di questi due array.

// Ricordando l’accesso agli array con indici e chiavi visti a lezione, ricostruire questa frase:

// **Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita.**

// ATTENZIONE: Nell’array potreste trovare degli intrusi o non trovare alcune preposizioni. Approcciate il problema nel modo che ritenute più opportuno: nuove variabili, concatenamenti, apice singolo, doppio apice ecc..


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];

$results =  $words1[6][3][1][1] . ' ' . $words1[6][3][0] . ' del ' . $words1[6][3][1][0] . ' ' . $words2['elemento2'] . ' ' . $words1[2] . ' ' . $words1[4] . ' ' . $words1[6][4] . ' per ' . $words1[0] . ' ' . $words1[6][3][1][2][0] . ' oscura, ' . $words2['elemento3'][2] . ' ' . $words1[6][3][1][2][1] . ' ' . $words1[7] . ' ' . $words1[6][3][1][2][2][0] . ' ' . $words1[6][1] . ' ' . $words2['elemento3'][1] . '.'; //<--- Tutto in questa variabile
echo $results;