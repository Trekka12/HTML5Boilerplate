<?php

//Set error reporting status
error_reporting(-1);

// Below code borrowed from mos example site
// Change this to __DIR__ whenever PHP5.3 is supported on production environment
if(!defined('__DIR__')) {
  define('__DIR__', dirname(__FILE__));
}

//Generate main menu alternatives
function generateMenu($pageID)
{
	if($pageID == "presentation")
	{

	   $menuAlt1 = "<span id=\"visited\">Presentation</span>";

	}else {

	    $menuAlt1 = "<a href=\"index.php\">Presentation</a>";
	}


	if($pageID == "redovisning")
	{

	   $menuAlt2 = "<span id=\"visited\">Redovisning</span>";

	}else {

	    $menuAlt2 = "<a href=\"redovisning.php\">Redovisning</a>";
	}


	if($pageID == "showsource")
	{

	   $menuAlt3 = "<span id=\"visited\">Visa källkod</span>";

	}else {

	    $menuAlt3 = "<a href=\"viewsource.php\">Visa källkod</a>";
	}


	echo <<<EOD

                <nav id="mainMenu">
                    <ul id="links">
                        <li style="margin-left: 0;">{$menuAlt1}</li>
                        <li>{$menuAlt2}</li>
                        <li style="margin-right: 0;">{$menuAlt3}</li>
                    </ul>
                </nav>

EOD;
}

//GetCurrentURL-function with courtesy of: http://webcheatsheet.com/PHP/get_current_page_url.php
function getCurrentUrl() {
$pageURL = 'http';
if(isset($_SERVER["HTTPS"]))
{
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
}

$pageURL .= "://";

if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
} else {
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}

return $pageURL;
}

?>