<?php

//This stores template contents for the presentation-page of the website
$pageID = "viewsource";
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

//The page contents for this page uniquely
$pageContent = $sourceBody;


//Add the index.php contents to the default template
include('theme/default_template.php');
?>