<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
$ifVar = true;
if ($ifVar) {
	echo 'I love PHP in If Statement' . "<br/>";
};

for ($counter = 1; $counter <= 10; $counter++) {
	echo "I love PHP" . $counter . "<br/>";
}

switch(99) {
	case 34: 
	echo "it IS 34";
	break;
	default:
	echo "not known number";
}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>