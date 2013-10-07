<?php

//This stores template contents for the presentation-page of the website
$pageID = "redovisning";
include('incl/config.php');

$currentURL = getCurrentURL();
$pageTitle = "Min redovisnings sida";
$page_Meta_Desc = "Denna sida innehåller mina kursmoments redovisningar.";

//CSS Styles for this page uniquely
$style = <<<EOD

section#content h1 {
	color: #fff;
	text-shadow: 1px 1px 3px #000;
}

section#content p {
	font-size: 14px;
	color: #ccc;
	line-height: 1.6em;
	font-family:  'Open Sans', Arial, sans-serif;
}

EOD;

//the page contents for this page uniquely
$pageContent = <<<EOD

<!-- Här hamnar sedan allt presentations innehåll i HTML-kod -->
<h1>kursmoment 01 : En Boilerplate</h1>
<p>
Jag fann kursmoment 01 i PHPMVC som alla andra första kursmoment i BTH-kurspakets kurserna, lite svåra att sätta sig in i, men när man väl började förstå så tog det fart ganska bra tyckte jag.<br><br>

För min egen del så var det en hel del nya moment som togs upp i detta kursmoment, framförallt; öppen källkod och utveckling med öppen källkod samt verktyg för hantering av öppen källkods projekt.<br><br>

Hade en hel del svårigheter och problem i början med att sätta mig in i och förstå hur det var tänkt att man skulle arbeta med Git / GitHub, efter många om och men, rådfrågningar i IRC-chatten och genomläsning av Git-manualer och dbwebb-tutorials så tror jag äntligen jag kommit in i det hyfsat. Dock ej så säker på att jag kommit in i det såpass så jag arbetar på det optimalaste viset, men förstår iaf. någorlunda vad jag gör nu, vilket jag inte hade någon som helst aning om i början.<br><br>

<b style="color: #fff; text-decoration: underline;">Jag har lärt mig och gjort följande;</b><br>
Etablerat ett GitHub konto, laddat ned Git till min Windows 7, 64-bitars Ultimate arbetsstation och initierat den nedladdade HTML5 Boilerplaten som ett lokalt Git repository, etablererat länk mellan lokalt repo och GitHub repo för projektet, samt länkat GitHub repot med studentservern via PuTTy. Har dessutom etablerat SSH-nycklar för Git/GitHub, och försökt optimera arbetsprocessen/metodiken för att kollaborera mellan lokalt repo, GitHub repot samt studentservern genom att ange "Bash Alias"- genvägar för git-kommandon. Har även lärt mig grundläggande och vitala Bash kommandon för att kunna arbeta med Git och shell-script generellt (cd, mkdir, pwd, touch, alias, Git-specifika kommandon, etc.).<br>
Satt mig också in i HTML5 Boilerplate strukturen såväl som source.php's struktur (för att kunna styla ordentligt när integrerad i en template) för att kunna separera och manipulera delarna på ett praktiskt lämpat sätt och få genomfört eftersökta ändringar och önskemål.<br>
Noterade också för effektiv redigering av sidan och för att på ett optimalt sätt uppdatera repo:na av hemsidan, göra mindre ändringar först i Mozilla FireBug för att se effekten innan jag utför repo-uppdateringar, etc. samt laddat ned och börjat arbeta med Sublime Text - en väldigt bekväm, och för mig - ny text-editor, m.m.<br><br>

Ett litet irritationsmoment jag stött på dock nu efter att ha intensivt arbetat med Git/GitHub och repo-kollaboration mellan olika servrar i några timmar i sträck, är den ökade utvecklingstiden samt den försvårade/fördröjda förhandsgranskningen av PHP-kods ändringarna - detta då jag först gör en ändring lokalt, sedan måste jag uppdatera GitHub repot och sedan pulla ned uppdateringarna från GitHub repot till studentservern för att få se ändringar/uppdateringarna.<br><br>

Dock noterar jag även fördelarna med detta system vid utvecklingsanvändning, då det dels backupar ens arbete regelbundet, man kan på ett lätt sätt koordinera mellan diverse servrar / arbetsstationer, smart med integration med vanliga shell-scripts, m.m.<br>
Tycker dock det är väldigt synd att man inte kan programmera makron till Git där man utför "x" antal kommandon efterföljande varandra, som ex. en funktion med nödvändiga inparametrar beroende på vilka kommando man har efterföljande varandra. Det hade definitivt effektiviserat arbetsflödet tror jag.<br><br>

Efter att äntligen fått klart kmom01 tycker jag mig märka en struktur förberedd för att i framtida göra en abstrakt klass av de individuella undersidorna - då innehållet för respektive undersida kokar ned till samma variabler och då kan ha det som skal och sen bara fylla skalets olika respektive variabler med innehåll på något enkelt vis kanske?<br><br>

Mina personliga åsikter om HTML5 Boilerplate konceptet är väl att det är en smart tanke som jag själv faktiskt funderat en hel del på under mina utvecklingsdagar genom de senaste åren - dock kan jag tycka att det finns en generaliserad överdrift av funktioner - trots att jag kan förstå anledningen bakom allting - hade kanske varit smartare med ett grafiskt webb-gränssnitt som Modernizr-generatorn har isf. där man kan välja vad man önskar inkludera i sin HTML5 Boilerplate och därefter få en .zip genererad med nödvändigt och utvalt material -> Tänker man använda meta taggar? Isf. vilka? Ska man ha jQuery? Ska mallen vara responsiv?, osv.<br><br>

När jag gjorde min me-sida tänkte jag nog framförallt att följa mos instruktioner så gott det gick på rätt sätt (och med mos instruktioner menar jag då granska hans kmom01 sida i detalj och försöka sätta mig in i och förstå varenda beståndsdel och dess funktion) och sedan göra på eget bevåg på de ställen det kändes bekvämt att pröva hur de egna vingarna bar.<br>
Dock har jag egen-fierat min sida aningen så den skiljer sig från mos på sådant vis att jag själv förstår vad den gör och vad koden står för.<br><br>

Den främsta imponerande aspeketen jag uppmärksammade med HTML5 Boilerplate var hur all webbdesign/webbutvecklings diversitet har blivit samlad på ett och samma ställe, tillgängligt för allmänheten att ta del av.<br>
En av de svåra delarna av webbdesign är just hur stort området är och alla de olika delarna som spelar roll för hur en hemsida ser ut och beter sig, och det är inte lätt att sätta sig in i alla dessa aspekter - det tar tid, men när de är samlade och dokumenterade på det viset som HTML5 Boilerplate gör så kan man både uppdatera sina kunskaper och expertis såväl som att effektivt lägga den ständigt återkommande grunden för en hemsida på ett snabbt och enkelt sätt som man dels sparar värdefull tid på, men även kan vara säker på att det fungerar!





</p>
EOD;

//Add the index.php contents to the default template
include('theme/default_template.php');
?>