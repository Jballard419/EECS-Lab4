
<?php
//access the global array called $_POST to get the values from the text fields
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$score=1;
if($q1== "to find the holy grail"){

$score= $score+1;
}
if($q2== "blue"){

$score= $score+1;
}
if($q3== "Assur"){

$score= $score+1;
}
if($q5== "What do you mean? An African or European swallow?"){

$score= $score+1;
}
echo "<html><head><title> Answers </title> <link href='style.css'
            rel='stylesheet'
            type='text/css'/> </head>";
if ($score==5) {
  echo " <body class='pass'>";
} else {

              echo " <body class='test'>";
}

echo "<html><head><title> Answers </title> <link href='style.css'
            rel='stylesheet'
            type='text/css'/> </head> <body class='test'>";

echo "Q1: What is your quest? <br>";
echo "You answered: " . $q1 . " <br>";
echo "Correct answer: to find the holy grail <br> </br>";
echo "Q2: What is your favorite color? <br>";
echo "You answered: " . $q2 . " <br>";
echo "Correct answer: blue <br> </br>";
echo "Q3: What is the capital of Assyria?<br>";
echo "You answered: " . $q3 . " <br>";
echo "Correct answer: Assur <br> </br>";
echo "Q4: What is your name?  <br>";
echo "You answered: " . $q4 . " <br>";
echo "Correct answer: anything really I mean you could have the name Sir dame I care <br> </br>" ;
echo "Q5: What is the air-speed velocity of an unladen swallow?  <br>";
echo "You answered: " . $q5 . " <br>";
echo "Correct answer: What do you mean? An African or European swallow? <br> </br>";



echo "Your score: " . $score*20 ."% <br>";

if ($score==5) {
  echo "<b> Right. Off you go. </b>";
} else {
  echo "<fire> Auuuuuuuugh! </fire>";
}











?>
