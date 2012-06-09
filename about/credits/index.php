<?php

$page_title = "Credits &mdash; OAuth";
$page_section = "about";
$page_secondary = "credits";
$page_meta_description = "";

require('../../includes/_header.php');
?>
<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a href="/about">Introduction</a></li>
          <li><a href="/about/design-goals">Design Goals</a></li>
          <li><a class="selected" href="/about/credits">Credits</a></li>
        </ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>Credits</h2>
			<p>
				This site was designed by <a href="http://factoryjoe.com">Chris Messina</a> and is administered by <a href="http://aaronparecki.com/">Aaron Parecki</a>.
			</p>
			<?php require('../../includes/_edit_banner.php'); ?>
    </div>

<?php require('../../includes/_footer.php'); ?>