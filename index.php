<?php
$head='./php/head.php';
if(file_exists($head))
{
  include($head);
}
?>
    <h1>Church Program - 16 January 2022</h1>
    <div class="program">
        <h2>Program</h2>
        <p class="fs-3"><strong>Opening hymn </strong>: 243 Let us all Press </p>

        <p class="fs-3"><strong>Opening prayer </strong> : By invitation</p>

        <p class="fs-3"><strong>Sacrament hymn </strong>: 186 Again we meet around the board </p>

        <p class="fs-3"><strong>Speaker </strong>: Sister Burton</p>

        <p class="fs-3"><strong>Intermediate hymn </strong>: 66 Rejoice, The Lord is King!</p>

        <p class="fs-3"><strong>Speaker </strong>: Elder Smith</p>

        <p class="fs-3"><strong>Closing Hymn </strong>: 218 We give thee but Thine Own </p>

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

