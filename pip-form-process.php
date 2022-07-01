<?php
if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}

if(empty($_POST["fname"]) ||
	empty($_POST["questionOne"]) ||
	empty($_POST["other"]) ||
	empty($_POST["questionTwo"]) ||
	empty($_POST["questionThree"]) ||
	empty($_POST["questionFour"]) ||
	{
		echo "Please fill the form"
		exit;
	}

$name = $_POST["fname"];
$questionOne = $_POST["questionOne"];
$locationHome = $_POST["location_home"];
$locationSchool = $_POST["location_school"];
$other = $_POST["other"];
$questionTwo = $_POST["questionTwo"];
$questionThree = $_POST["questionThree"];
$questionFour = $_POST["questionFour"];

mail( 'submission@volatiledoor6.com' , 'New form submission' ,
"New form submission: Name: $name, AnswerOne: $questionOne, AnswerTwo: $locationHome,
AnswerThree: $locationSchool, AnswerFour: $other, AnswerFive: $questionTwo,
AnswerSix: $questionThree, FinalAnswer: $questionFour" );

header('Location: thank-you.html');

?>