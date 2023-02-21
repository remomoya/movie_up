<?php

if(isset($_POST['disp'])==true)
{
	if(isset($_POST['moviecode'])==false)
	{
		header('Location:movie_ng.php');
		exit();
	}
	$movie_code=$_POST['moviecode'];
	header('Location:movie_disp.php?moviecode='.$movie_code);
	exit();
}

if(isset($_POST['add'])==true)
{
	header('Location:movie_add.php');
	exit();
}

if(isset($_POST['edit'])==true)
{
	if(isset($_POST['moviecode'])==false)
	{
		header('Locstion:movie_ng.php');
		exit();
	}
	$pro_code=$_POST['moviecode'];
	header('Location:movie_edit.php?moviecode='.$movie_code);
	exit();
}

if(isset($_POST['delete'])==true)
{
	if(isset($_POST['moviecode'])==false)
	{
		header('Location:movie_ng.php');
		exit();
	}
	$pro_code=$_POST['moviecode'];

	header('Location:movie_delete.php?moviecode='.$movie_code);
	exit();
}

?>

