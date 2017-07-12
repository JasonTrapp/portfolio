<!DOCTYPE html>

<html>
	<head>
		<title>Jason's Portfolio</title>

		<link rel="stylesheet" href="_CSS/portfolio.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<!-- Bootstrap CDN -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<script type="language/javascript src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
				<!-- jQuery CDN -->
				<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	</head>
	
	<body style="background-color: black;">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Jason's Portfolio</a>
				</div>
				<?php
					$navBarElements = [
						[
							'name' => 'Home',
							'url' => 'home.php'
						],
						[
							'name' => 'About Me',
							'url' => 'about.php'
						],
						[
							'name' => 'Resume',
							'url' => 'resume.php'
						],
						[
							'name' => 'Projects',
							'url' => 'projects.php'
						],
						[
							'name' => 'Contact Me',
							'url' => 'contact.php'
						],
						[
							'name' => 'Links',
							'url' => 'links.php'
						]		
					];

					echo '<ul class="nav navbar-nav">';

					foreach($navBarElements as $item){
						echo '<li class="active">';
						echo "<a href=\"{$item['url']}\">{$item['name']}</a></li>";
					}
					echo '</ul>';

				?>
			</div>
		</nav>
		
		<div id="content" style="margin:0 auto;width:60%;text-align:justify;">
	
