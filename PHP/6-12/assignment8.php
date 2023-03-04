<?php

$Array = [
    "FrontEnd" => ["HTML", "CSS", 
                            "JS" => [ "Vuejs" => ["2" => "v2","3" => "v3"],
                                        "0" => "Reactjs",
                                        "1" => "Svelte" 
                                    ] 
                            
                ],
    "BackEnd" => ["PHP", "MySQL", "Security"],
    "0" => "Git",
    "1" => "Github",
    "Testing" => ["Unit Testing", "End to End", "Integration"]
];

echo '<pre>';
print_r($Array);
/*
    Array
(
  [FrontEnd] => Array
    (
      [0] => HTML
      [1] => CSS
      [JS] => Array
        (
          [Vuejs] => Array
            (
              [2] => v2
              [3] => v3
            )

          [0] => Reactjs
          [1] => Svelte
        )
    )

  [BackEnd] => Array
    (
      [0] => PHP
      [1] => MySQL
      [2] => Security
    )

  [0] => Git
  [1] => Github
  [Testing] => Array
    (
      [0] => Unit Testing
      [1] => End To End
      [2] => Integration
    )
)
 */