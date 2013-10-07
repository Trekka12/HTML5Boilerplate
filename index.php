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
<p>
Mitt namn är André och jag är 21 år och bor i Helsingborg på den sydvästra skånska kusten.<br><br>

För nuvarande trimmar jag min expertis och mina kunskaper inom varierande ämne och områden 
(mestadels akademiskt) vilka för det mesta kan klassas inom datorer, webb, teknik och utveckling 
medan jag har uppehåll från Lunds Tekniska Högskola's civilingenjörsutbildning 
inom Informations- och kommunikationsteknologi.<br><br>

Har redan lyckats få en fot in i dörren hos flera intressanta och användbara och roliga ämne såsom; 
Java, PHP, HTML 5, CSS 3.0, SQLite och Databaser, webbutveckling och webbdesign (back-end/front-end), 
grafisk design, verktyg och tjänster ute på nätet idag m.m.<br><br>

I övrigt gillar jag att träna och att vara ute i naturen, gillar att jogga, powerwalka/hajka, 
spela pingis, tennis, simma, styrketräna/gymma, m.m.<br><br>

Några andra fritidsintressen inkluderar bl. a.; egna projekt och egen projektutveckling, 
film och tv-serier, musik och datorer i allmänhet, samt fotografering.<br><br>

Tar ett fåtal uppdrag lite då och då på mitt egna företag, oftast inom datorservice/support, 
webbutveckling och övrig försäljning av tekniska tjänster och konsultation inom mina aktuella 
expertisområden.<br><br>

Min stora förhoppning är att någon gång i framtiden när utbildningen är klar kunna vara del av eller
driva ett eget företag inom webb, program och spel-utveckling såväl som ev. andra datortjänster som hör till.
</p>
EOD;

//Add the index.php contents to the default template
include('theme/default_template.php');
?>