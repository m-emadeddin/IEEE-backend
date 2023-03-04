<?php

/* PROBLEM:
$something = "Programming";

echo <<<'code'
Hello \PHP\
We Love $something
        code;
*/

/* Solution: */
$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

// [1] Fix The Error ---Solution---> Invalid Indentation 
// [2] Remove 2 Characters To Get The Output --Solution--> the sigle qoutes to convert from nowdoc to heredoc

// Needed Output
// Hello \PHP\ We Love Programming