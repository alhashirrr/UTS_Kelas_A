<?php
//NAMA:MIFTAHUL FAUZAN
function notFound()
{
  
  echo "ERROR: Page not found!\n";
  return 404;
}
//NIM:2255201023
function greetLearner()
{

  echo "Hello, Learner!\n";
  echo "I hope you're (still) enjoying PHP!\n";
  echo "Love, Codecademy\n";
  return "<3";
}
//KELAS:A

// Don't change the code below:

$error = notFound(); 
$heart = greetLearner();

echo "I received a $error, but it's ok because I also received $heart.";