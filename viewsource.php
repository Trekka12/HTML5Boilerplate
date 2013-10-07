<?php

//This stores template contents for the presentation-page of the website
$pageID = "showsource";
include('incl/config.php');

$currentURL = getCurrentURL();
$pageTitle = "Källkodsvisnings verktyg för min sida";
$page_Meta_Desc = "Denna sida innehåller ett källkodsvisnings verktyg.";

$sourceBasedir = __DIR__;
$sourceNoEcho = TRUE;
//Include the source-code investigative script
include(__DIR__ . '/source.php');

//CSS Styles for this page uniquely
$style = $sourceStyle;

$style = $style . <<<EOD

header h1 {
	font-family: 'Open Sans', Arial, sans-serif;
	color: #FF9E36;
}

header p {
	color: #aaa;
}

code {
	font-size: 1.4em;
	font-family: 'Inconsolata', Arial, sans-serif;
}

code a:link, code a:visited, code a:focus {
	color: #fff;
}

code a:hover, code a:active {
	color: #FF9E36;
}

div.container {
	font-size: 1.4em;
}

div.code code {
	font-size: 1em;
	font-family: monospace;

}

EOD;

//The page contents for this page uniquely
$pageContent = $sourceBody;


//Add the index.php contents to the default template
include('theme/default_template.php');
?>