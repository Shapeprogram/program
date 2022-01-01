<?php
$head='./php/head.php';
if(file_exists($head))
{
  include($head);
}
?>
    <h1>Church Program - 26 December 2021</h1>
    <div class="program">
        <h2>Program</h2>
        <p class="fs-3"><strong>Opening hymn </strong>: 217 come let us anew   </p>

        <p class="fs-3"><strong>Opening prayer </strong> : By invitation</p>

        <p class="fs-3"><strong>Sacrament hymn </strong>: 188 thy will, o lord, be done </p>

        <!--<p class="fs-3"><strong>Speaker </strong>: Melissa Heaton </p>

        <p class="fs-3"><strong>Intermediate hymn </strong>: 202 O Come All Ye Faithful  </p>

        <p class="fs-3"><strong>Speaker </strong>: Ivo Marien</p>-->

        <p class="fs-3"><strong>Closing Hymn </strong>: 220 lord, i would follow thee</p>

        <p class="fs-3"><strong>Closing prayer </strong>: By invitation </p>
    </div>

    <div class="program">
        <h2>Announcements</h2>
        <p class="fs-3"><!--1.--><strong>No announcements </strong></p>
    </div>
<?php 
	$foot='./php/foot.php';
	if(file_exists($foot))
	{
  		include($foot);
	}
?>

