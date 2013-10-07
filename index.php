<?php

//This stores template contents for the presentation-page of the website
$pageID = "presentation";
include('incl/config.php');

$currentURL = getCurrentURL();
$pageTitle = "Min presentations sida";
$page_Meta_Desc = "Denna sida innehåller information om skaparen till hemsidan.";

//CSS Styles for this page uniquely
$style = <<<EOD

section#content h1 {
	color: #fff;
	text-shadow: 1px 1px 3px #000;
}

EOD;

//the page contents for this page uniquely
$pageContent = <<<EOD

<!-- Här hamnar sedan allt presentations innehåll i HTML-kod -->
<h1>Presentation av mig</h1>
<p></p>
EOD;

//Add the index.php contents to the default template
include('theme/default_template.php');
?>