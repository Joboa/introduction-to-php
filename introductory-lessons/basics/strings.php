<?php

/**
 * @access public
 * @method : strtolower, strtoupper, strlen, substr, sha1, str_replace
 * 
 */

// Strings using single quotes
var_dump('You need to be logged in to view this page');
echo "<br>";
echo 'I\'ll be back after 20 minutes';
echo "<br>";

// Strings using double quotes
// can be used to escape special characters
echo "<br>";
$name = 'Alicia';
echo "$name is friends with John";
echo "<br>";
echo "<br>";



// HEREDOC
$baby_name = "Shalon";
// EOT: End Of Text
echo <<<EOT

    When $baby_name was a baby,

    She used to look like a "boy".

EOT;
echo "<br>";
echo "<br>";


// NOWDOC
$baby_name = "Shalon";
$my_variable = <<<'EOT'

    When $baby_name was a baby,

    She used to look like a "boy".

EOT;

echo $my_variable;
echo "<br>";
echo "<br>";

$enc = "password";
echo sha1($enc);
?>