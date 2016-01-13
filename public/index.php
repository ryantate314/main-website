<?php
require_once 'setup.php';





require INCLUDE_DIR . "inc.header.php";
?>
<nav class="navbar navbar-default navbar-fixed-top navbar-burger navbar-transparent" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar bar1"></span>
				<span class="icon-bar bar2"></span>
				<span class="icon-bar bar3"></span>
			</button>
			<a href="index.php" class="navbar-brand"><?php echo APPLICATION_NAME; ?></a>
		</div><!--navbar-header-->
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right navbar-uppercase">
				<li><a href data-scroll="true" data-id="#whoAmI">About</a></li>
			</ul>
		</div>
	</div><!--container-->
</nav>
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="images/nature_banner.jpg" alt="Unsplashed background img 1"></div>
  </div>
<?php
require INCLUDE_DIR . "inc.footer.php";
