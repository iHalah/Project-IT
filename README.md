# Project-IT


Welcome to the Project-IT wiki!

## Overview
In this project, we created a web page using HTML, CSS, JavaScript, and PHP. The goal is to create a Quiz app to measure a player's level of knowledge in JavaScript, for example.
Upon answering, the player gets 10 points for each question. At the end of the game the player will be required to register to save his score in the database. Also, the player can see all the previous player's score on the high scores page.


## Screenshots
This section displays the web pages designed for this project.

**Home page**

![Home page](https://github.com/iHalah/Project-IT/blob/main/wiki_images/s1.png)


**Questions page**

![Questions page](https://github.com/iHalah/Project-IT/blob/main/wiki_images/s2.png)


**Highscores page**

![Highscores page](https://github.com/iHalah/Project-IT/blob/main/wiki_images/s5.png)


### The most important techniques

* The json file can be used to write an external question file
* The cookie was used to transfer variables from JavaScript to PHP


## User Interaction

![flow chart](https://github.com/iHalah/Project-IT/blob/main/wiki_images/Blank%20diagram.png)


## Web application testing

 
Test Case:
1. 
* Test Scenario: Check player sign up with valid Data.
* Test Steps: 
> Go to site signup.html ->
> Enter Username ->
> Enter Password ->
> Click sign up

* Test Data: Username = Halah Password = 123
* Expected Results: player should Login into a web page   
* Actual Results: As Expected
* Pass/Fail: Pass

2. 
* Test Scenario: Check player Login with invalid Data.
* Test Steps: 
> Go to site signup.html ->
> Enter Username ->
> Enter Password ->
> Click sign up

* Test Data: Username = Halah Password = 11
* Expected Results: player must not log into the web page, the username is already exists 
* Actual Results: As Expected
* Pass/Fail: Pass

3. 
* Test Scenario: Check player Login with empty Data.
* Test Steps: 
> Go to site signup.html ->
> Nothing was written
> Click sign up

* Test Data: Username =   Password = 
* Expected Results: The player must not log into the web page, because the register button is disabled 
* Actual Results: As Expected
* Pass/Fail: Pass
