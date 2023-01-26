<?php

function magic8Ball()
{
  echo "\nHey! What did you want to ask me? \n";
  $question = readline(">>");
  echo "\nHmm I see... Your question is:
$question
I understand. I have consulted the spirit world. \nHere is your answer: \n";
$choice = rand(0,6);

//echo $choice;
  switch ($choice){
    case 0:
      echo "It is certain\n";
      break;
    case 1:
      echo "It is decidedly so\n";
      break;
    case 2:
      echo "Without a doubt\n";
      break;
    case 3:
      echo "Yes - definitely\n";
      break;
    case 4:
      echo "You may rely on it\n";
      break;
    case 5:
      echo "As I see it, yes\n";
      break;
    case 6:
      echo "Most likely\n";
      break;
    default:
      echo "Unhandled indice\n"; 
  }

};

magic8Ball();
