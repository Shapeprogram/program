<?php
$head='./php/head.php';
if(file_exists($head))
{
  include($head);
}
?>
    <h1>Church Program - 09 October 2022</h1>
    <div class="program">
        <h2>Program</h2>
        <p class="fs-3"><strong>Opening hymn </strong>: #21 Come listen to prophet's voice </p>

        <p class="fs-3"><strong>Opening prayer </strong>: By invitation</p>

        <p class="fs-3"><strong>Sacrament hymn </strong>: #175 O God, the Eternal Father</p>
	    <p class="fs-3"> The Primary Program</p>

        <!--<p class="fs-3"><strong>Speaker </strong>: Ivy Stine</p>

        <p class="fs-3"><strong>Intermediate Hymn </strong>: TBD</p>

        <p class="fs-3"><strong>Speaker </strong>: Greg Stine</p>-->

        <p class="fs-3"><strong>Closing Hymn </strong>: #19 We thank thee oh God for a Prophet</p>

        <p class="fs-3"><strong>Closing prayer </strong>: By invitation</p>
    </div>

    <div class="program">
        <h2>Announcements</h2>
        <!--<p class="fs-3">1.<strong> Linger Longer After Church</strong></p>
        <p class="fs-3">2.<strong> General Conference 1-2 October</strong></p>-->
    </div>
<?php 
	$foot='./php/foot.php';
	if(file_exists($foot))
	{
  		include($foot);
	}
?>
