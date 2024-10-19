<?php
// don't delete this line, this must be the first line of your code
if(!defined('custom_page_from_inclusion')) { die(); }
$time_start = microtime(true);
//Bring in required files
require_once 'g_functions.php';
require_once 'bb_functions.php';

$str="<br /><div class='nz-card'>";
$str.="<header class='w3-container w3-blue-gray'>";
$str.="<h1>Example page</h1>";
$str.="</header>";
output($str);


$str="<div class='w3-container w3-pale-blue'>";
output($str);
//Text for middle box
$str="<h2>This is an example!</h2>";
output($str);

$str="<div class='w3-container w3-teal'>\n";
output($str);


function extract_flags($total) {
    $flags = [];

    // Iterate through the first 15 flags
    for ($i = 0; $i <= 15; $i++) {
        $flag_value = pow(2, $i);
        
        // Check if the flag is set
        if ($total & $flag_value) {
            $flags[] = $i; // Using 0-based index
        }
    }

    return $flags;
}

// Example usage:
$total_value = 1536;
$set_flags = extract_flags($total_value);

echo "Total value: $total_value\n";
echo "Flags set: " . implode(', ', $set_flags) . "\n";



require_once 'g_footer.php';
?>
