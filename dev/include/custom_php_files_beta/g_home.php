<?php
//Version 11.4.2 
// don't delete this line, this must be the first line of your code
if(!defined('custom_page_from_inclusion')) { die(); }
$time_start = microtime(true);
require_once 'bb_functions.php';
require_once 'g_functions.php';
require_once 'mydatabase.php';

$_cp_myname=$_SESSION['logged_user_infos_ar']["username_user"];

echo "<br />";
echo "<div class='w3-card-4'>";

#Header
echo "<div class='w3-container $mycolour6'>";
$_cp_dbcheck=substr($db_name,0,3);
if ('dev' == $_cp_dbcheck){
		echo "<h1>Welcome to Gameplan Analysis $_cp_myname</h1>";
		echo "<h2>You are logged on to ** DEV **</h2>";
	} elseif ('pre' == $_cp_dbcheck) {
		echo "<h1>Welcome to Gameplan Analysis $_cp_myname</h1>";
		echo "<h2>You are logged on to ** PRE-PROD **</h2>";
	} else {
				echo "<h1>Welcome to Gameplan Analysis</h1>";
		#echo "<br>";
	}


#Main content
$str= "<div class='w3-panel $mycolour4 w3-card-4 w3-round-xxlarge'>";
$str.="<p>Please choose an item from the menu to begin.</p>";
output($str);

require_once 'g_footer.php';
?>
