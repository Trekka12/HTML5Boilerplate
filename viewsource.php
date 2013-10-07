<?php

//This stores template contents for the presentation-page of the website
$pageID = "viewsource";
include('incl/config.php');

$currentURL = getCurrentURL();
$pageTitle = "Källkodsvisnings verktyg för min sida";
$page_Meta_Desc = "Denna sida innehåller ett källkodsvisnings verktyg.";

//CSS Styles for this page uniquely
$style = <<<EOD

EOD;

//the page contents for this page uniquely
$pageContent = include('source.php');

//Add the index.php contents to the default template
include('theme/default_template.php');
?>