<?php include("header.php") ?>


<h1 style="text-align:center;">Projects</h1>
<hr>
<div class="proj" id="proj1">
	<h3>David's Houses - IFB299</h3>
	<p>This is a web based application which is based on the specifications given by a fictional character named 'David'. The website allows users to sign-up, register for an inspection time and view properties on the website. Property owners are able to designate inspection times for the properties they own , can . <img src="img/david.png" style="width:50%;height:20%;" ALIGN="right">The owner and other staff members, can assign a person to be a property owner or remove a person from the property they own, add their own inspection times, remove, edit and add properties. Part of the criteria for this assessment was the process of agile development in which we used various tools and methodologies to complete the project.
<ul>
	<li>Creating story cards</li>
	<li>Create product backlog</li>
	<li>Managing tasks</li>
	<li>Weekly scrum</li>
	<li>4 week sprints</li>
	<li>Automated testing</li>
</ul>
The front-end technologies used for this project include html, css, bootstrap, javascript and JQuery. HTML was used to structure the webpage, CSS and Bootstrap were used for webpage styling and Javascript was used to perform non-server related tasks (ie. checking if forms were filled out). The back-end technologies used for this project included Apache, PHP, MySQL and Heroku. Heroku is a service which allows developers to present their product, PHP was used to perform all server related tasks (ie. present information in the database) and Apache was used for local testing. To perform the automated testing, we used Selenium to test against the user stories.
</p>
<img src ="http://www.wodindia.com/img/demo/php-icon.png" style="width:64px; height:64px;">
<img src ="https://image.flaticon.com/icons/png/256/25/25231.png" style="width:64px; height:64px;">
<img src ="https://images.iwantmyname.com/apps/images/logo-developer-heroku.png" style="width:64px; height:64px;">
<img src ="http://ourcodeworld.com/public-media/gallery/categorielogo-5713d24f9fa5f.png" style="width:64px; height:64px;">
<img src ="https://68.media.tumblr.com/avatar_1eec5d89b817_128.png" style="width:64px; height:64px;">
</div>
<hr>
<div class="proj">
	<h3>Soccer Competition - CAB302</h3>
	<p>This is a console based application which simulates a soccer/football competition. There can be multiple instances of competitions which can contain any number of leagues. Those leagues can contain any number of teams*. At the end of the season, relegations and promotions occur given there is more than 1 league, if there is one league then nothing happens otherwise the top team moves to the next highest league and the wooden spoons move down a league. If the top team is in league 1 then it stays where it is and conversely, if the wooden spoons is in the last league then it stays where it is.
<br><br>
*We weren't suppose to test for less than 2 teams.</p>
</div>
<hr>
<div class="proj">
	<h3>Pizza Restaurant - CAB302</h3>
	<p>This is a GUI application which takes in a specific format and shows the information of a customer and the pizza they have ordered. <ul>Customer contraints:<img src="img/first.png" style="width:37%;height:15%;" ALIGN="right"> 
	<li>cannot not be more than 10 units in any direction away</li> 
	<li>must have a valid mobile number starting with 0 and 10 digits</li>
	<li>name cannot be only spaces and no longer than 20 characters</li>
	<li>customers cannot be delivered to if they are at the restaurant</li>
	<li>conversely cannot be picked up if they are not at the restaurant</li>
	Pizza constraints:
	<li>Must be either meat lovers, margherita or vegetarian</li>
	<li>Cannot order pizza before 7PM and cannot order after 11PM (inclusive)</li>
	<li>Must order at least one pizza and no more than 10</li>
	<li>Cost of pizza is the sum of its toppings</li>
	<li>Pizzas are thrown out after 1 hour and take 10 minutes to cook</li>
</ul>
When running the program, the file input must be a text file with the format of: <br>
order time, delivery time, name, mobile, delivery method, coordinates, type of pizza, quantity of pizza.<br> Here is an example:<br>
20:05:00,20:26:00,Aiden Zhang,0161429209,DVC,-3,9,PZV,2<br>
The source files can be downloaded <a href="https://bitbucket.org/n5372763/asgn2/src">here</a>. This was created using the Java programming language and was developed using the Eclipse IDE.
</p>
</div>
<?php include("footer.php")?>
