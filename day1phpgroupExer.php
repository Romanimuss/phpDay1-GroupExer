<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="exer1kef.css">




<?php
//Exercise 1
//Print your name in an h1 HTML 
//element using PHP
//(define the variable
//and store your name into it).
//Use external CSS to position your
//name in the middle of the screen
//(horizontal, vertical).

echo "<h1 id='Name'>Kefaet Prizreni!</h1>"; ?>

<?php
$name = "Manni Pryme";
echo "My Artist Name is, $name";?>



<?php
/*Exercise 2
create a couple of variables, name, age, and job title, and after that, you print a message on the screen "hi, my name is NAME, and i am AGE, and i work as a JOB_TITLE"*/
$name = "Kefaet Prizreni";
$age = "38";
$jobtitle = "Entrepreuer";
echo "<br> Hi my Name  is  $name  
Im  $age  years  Old  and  im  a  $jobtitle  since  4 years<br><br>";?>

<?php
/* Exercise 3
create an array that has names Mark, John, Georg and Lisa, print the 3rd player on the screen like this: "the third player in the team is 3rd_player". Done */

$players=["Mark", "John", "Georg", "Lisa"];
echo "The 3rd player is $players[2]";?>

<?php
/*Define an associative array and output array elements on the screen. Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.). 

Transform this code into a solution done with multidimensional arrays to track different properties of the characters. (hint: in order to output nicely (user friendly) your solutions on the browser you will need the HTML tags for it)*/

$cartoons= array (
    "Beetlejuice" => array
        (
        "Author" => "Tim Burton"
        ),
    "Spiderman" =>  array
        (
        "Author" => "Stan Lee"
        ),
    "Chipmunks" =>  array
        (
        "Author" => "Charly Chaplin"
        )
    );
    echo "<p>This Epic Cartoon Series and Movie afterword was written by ";
    echo $cartoons ['Beetlejuice']['Author']. ".</p>";