<?php

/* WEB mechanics (background edition) */

/* 1. Create a page with a white background and two links to itself. 
One link should show the filename, the other filename with a GET parameter color=blue. 
When you click the second link, the background should become blue. 
Clicking the first link should reset the background to white. */

/* 2. Make a page that changes its background color based on a color hex code 
provided in the GET parameter color (e.g., color=00ff00 for green). 
No links needed; the user sets the color in the URL bar. */

/* 3. Modify exercise 2 so that the color code can be entered in an input field 
and sent using a GET form. */

/* 4. Create two pages: apple.php and banana.php, 
coloring their backgrounds appropriately (red and yellow). 
In apple.php, always automatically redirect the browser to banana.php. 
Demonstrate the result. */

/* 5. Create two separate pages: green.php and purple.php. 
Each should have a link to itself. When the link is clicked, 
use PHP to redirect the browser to the other page (green to purple, purple to green), 
not just reload the same page. */

/* 6. Create a page with two buttons, one in a GET form and one in a POST form. 
Without checking specific $_GET or $_POST values, 
color the background green when the GET button is pressed and 
orange when the POST button is pressed. */

/* 7. Repeat exercise 6, but after a POST, redirect the browser to the same page using GET. */

/* 8. Create two pages: sky.php and ocean.php. 
Color them light blue and deep blue respectively. 
In sky.php, add a POST form with a button "GO TO OCEAN" that sends you to ocean.php. 
If ocean.php is accessed directly in the browser, redirect to sky.php. */

/* 9. Create a black page with a POST form, a button, and 
a random number (between 2 and 8) of checkboxes with letters X, Y, Z, etc. 
When the button is pressed, change the background to white, hide the form, 
and display the number of checked boxes. */

/* 10. Repeat exercise 9, but also display the total number of generated checkboxes. */

/* 11. Create a page with a link to itself that, when clicked, 
appends a counter value (counter=N) in the URL, increasing by one with each click. 
Show the current counter value on the page. */

/* 12. Create a page with a text input and a button. When submitted (POST), 
display the text in uppercase and the number of characters it contains. */

/* 13. Create a page with a form that asks for the user's name and 
favorite color (as a color input). When submitted (GET), display "Hello, [name]!" 
in the selected color. */

/* 14. Make a page that generates a random number from 1 to 100 and displays it. 
Add a button to generate a new random number without reloading the page 
(use AJAX/fetch and PHP). */

/* 15. Create a basic login form (username + password, POST). 
If the username is "admin" and password is "secret", display "Welcome, admin!". 
Otherwise, show an error. Do not use a database. */

/* Advanced 1.
Create a simple number guessing game. 
The page generates a random number between 1 and 20 (store it in the session). 
The user can enter their guess in a form. Show if the guess is too high, too low, 
or correct. When guessed correctly, allow restarting the game. */

/* Advanced 2.
Create a page with a form for uploading an image. 
After upload, display the image on the page. Only allow JPG or PNG files, 
limit file size to 2 MB. */

/* Advanced 3.
Create a two-player dice game. Players enter their names, 
then take turns clicking a button to roll a dice (1-6). Keep and show the scores. 
First to reach 50 points wins. After a win, allow starting a new game. */

/* Advanced 4.
Create a page with a form to input a list of numbers separated by commas. 
On submit (POST), show: the largest number, the smallest, the average, and the sorted list. */

/* Advanced 5.
Create a simple "to-do list" app using sessions. The page displays a form to add tasks, 
shows the current tasks, and allows removing them (with a "remove" button next to each). 
All data must be stored in the session.
*/

?>

/* ---------------------------------------- */

<?php

/* WEB mechanics (advanced edition) */

/* 1. Create a page with a dark blue background and three links to itself. 
One link shows the file name, the second link adds a GET variable color=green, 
the third adds color=orange. 
When clicking each link, the background color changes accordingly. 
When no variable is passed, the background remains dark blue. */

/* 2. Make a page like in 1st task, but instead of green/orange, 
allow any color using a GET variable color=HEXCODE written by hand in the URL. 
If the value is not a valid hex color, keep the background gray. */

/* 3. Modify the 2nd task so the color can be entered into a text input and 
submitted via a GET form. 
If the color is invalid, display a message "Invalid color code". */

/* 4. Create a page named apple.php and one called banana.php. 
Give each a matching background color. 
Add code to apple.php so it always redirects to banana.php using PHP. 
Demonstrate the redirect. */

/* 5. Create pages green.php and purple.php. 
Each has a link to itself. 
When the link is clicked, the PHP code redirects the browser to the other page 
(not by HTML tag but using PHP). Alternate between the pages with each click. */

/* 6. Make a page with 2 buttons: "Blue" and "Red". 
Each button is in its own form, one using GET and one using POST. 
Change the background to blue when the GET button is pressed, 
and to red when the POST button is pressed, without using specific variable names. */

/* 7. Repeat task 6. Add code so that after using the POST method, the browser is 
redirected to the same page using GET. 
Use the POST-REDIRECT-GET pattern. */

/* 8. Create pages violet.php and lilac.php. 
Each has a background color. 
In violet.php, include a POST form with a button "GO TO LILAC", targeting lilac.php. 
If lilac.php is accessed directly without POST, redirect to violet.php. */

/* 9. Create a black page with a POST form, button, and a random number (4-8) of 
checkboxes labeled X, Y, Z… When the button is pressed, the background becomes white, 
the form disappears, and the number of checked boxes is shown. */

/* 10. Repeat task 9 but show two numbers: how many checkboxes were checked and 
how many were generated. */

/* 11. Advanced 
Create a dice game for two players. 
Start with two input fields for names and a "Start Game" button. 
Display the score next to the fields. 
On start, show the first player's name and a button "Roll the dice". 
Pressing it generates a random number 1-6, adds it to the player's score, 
then switches to the other player. 
First to reach 40 points wins. Display winner and allow a restart. */

/* 12. Advanced 
Create a page where the background color changes to a random color every time the page is loaded or refreshed. 
Display the hex code of the color in the center of the page. */

/* 13. Advanced 
Create a page where you can upload an image file (jpg, png). 
After uploading, display the image on the page and show its file size and dimensions. 
If the file is not an image, display an error. */

/* 14. Advanced 
Make a to-do list page. 
You can add tasks via a POST form. 
Display all tasks and allow deleting any of them via GET or POST. 
Store the tasks in session. */

/* 15. Advanced 
Create a simple chat page using session. 
Allow entering a nickname and message via a POST form. 
Display all messages with nicknames below. 
Limit to the last 10 messages. 
Add a "Clear chat" button. */

?>