<?php
$head='./php/head.php';
if(file_exists($head))
{
  include($head);
}
?>
    <h1>Church Program - 06 March 2022</h1>
    <div class="program">
        <h2>Program</h2>
        <p class="fs-3"><strong>Opening hymn </strong>: 7 Israel, Israel, God Is Calling </p>

        <p class="fs-3"><strong>Opening prayer </strong> : By invitation</p>

        <p class="fs-3"><strong>Sacrament hymn </strong>: 171 With Humble Heart </p>

        <p class="fs-3"><strong>Testimonies </strong></p>

        <!--<p class="fs-3"><strong>Intermediate hymn </strong>: 67 Glory to God on High</p>

        <p class="fs-3"><strong>Speaker </strong>: President McCormick </p>-->

        <p class="fs-3"><strong>Closing Hymn </strong>: 89 The Lord Is My Light</p>

        <p class="fs-3"><strong>Closing prayer </strong>: By invitation</p>
    </div>

    <div class="program">
        <h2>Announcements</h2>
        <p class="fs-3">1.<strong> Temple will be closed from 14th of February till 25th of April for maintenance reasons. </strong></p>
        <p class="fs-3">2.<strong> General Conference 2-3 April 22</strong></p>
    </div>
<?php 
	$foot='./php/foot.php';
	if(file_exists($foot))
	{
  		include($foot);
	}
?>

