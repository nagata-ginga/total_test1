<?php
    //5次元配列定義
    $webService = [
        "sns" => [
            0 => [
                "users" => [
                    0 =>  [
                        "name" => "Aさん",
                        "age" => 21,
                    ],
                    1 => [
                        "name" => "Bさん",
                        "age" => 25,
                    ],
                ],
                "machine" => [
                    0 =>  [
                        "name" => "A機械",
                        "quantity" => 2,
                    ],
                    1 => [
                        "name" => "B機械",
                        "quantity" => 0,
                    ],
                ],
            ],
            1 => [
                "followers" => [
                    0 =>  [
                        "name" => "Aさん",
                        "number" => 21,
                    ],
                    1 => [
                        "name" => "Bさん",
                        "number" => 25,
                    ],
                ],
                "winners" => [
                    0 =>  [
                        "name" => "Cさん",
                        "money" => 2,
                    ],
                    1 => [
                        "name" => "B機械",
                        "money" => 0,
                    ],
                ],

            ]
        ],
        "game" => [
            0 => [
                "users" => [
                    0 =>  [
                        "name" => "Aさん",
                        "age" => 21,
                    ],
                    1 => [
                        "name" => "Bさん",
                        "age" => 25,
                    ],
                ],
                "machine" => [
                    0 =>  [
                        "name" => "A機械",
                        "quantity" => 2,
                    ],
                    1 => [
                        "name" => "B機械",
                        "quantity" => 0,
                    ],
                ],
            ],
            1 => [
                "followers" => [
                    0 =>  [
                        "name" => "Aさん",
                        "number" => 21,
                    ],
                    1 => [
                        "name" => "Bさん",
                        "number" => 25,
                    ],
                ],
                "winners" => [
                    0 =>  [
                        "name" => "Cさん",
                        "money" => 2,
                    ],
                    1 => [
                        "name" => "B機械",
                        "money" => 0,
                    ],
                ],

            ]
        ],
        "movie" => [
            0 => [
                "users" => [
                    0 =>  [
                        "name" => "Aさん",
                        "age" => 21,
                    ],
                    1 => [
                        "name" => "Bさん",
                        "age" => 25,
                    ],
                ],
                "machine" => [
                    0 =>  [
                        "name" => "A機械",
                        "quantity" => 2,
                    ],
                    1 => [
                        "name" => "B機械",
                        "quantity" => 0,
                    ],
                ],
            ],
            1 => [
                "followers" => [
                    0 =>  [
                        "name" => "Aさん",
                        "number" => 21,
                    ],
                    1 => [
                        "name" => "Bさん",
                        "number" => 25,
                    ],
                ],
                "winners" => [
                    0 =>  [
                        "name" => "Cさん",
                        "money" => 2,
                    ],
                    1 => [
                        "name" => "B機械",
                        "money" => 0,
                    ],
                ],

            ]
        ],
    ];

    //echo
    echo  $webService["sns"][0]["users"][0]["name"]."<br>";
    echo  $webService["sns"][0]["machine"][1]["name"]."<br>";
?>