<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>movie</title>
</head>
<body>

<?php

$movie_name=$_POST['name'];
$movie_gazou=$_FILES['img'];
$movie_movie=$_POST['movie'];

$movie_name=htmlspecialchars($movie_name,ENT_QUOTES,'UTF-8');


if($movie_name=='')
{
	print'動画名が入力されていません。<br/>';
}

else{
	print'動画名:';
	print $movie_name;
	print'<br/>';
}




if($movie_gazou['size'] > 0)
{
	if($movie_gazou['size']>1000000)
	{
		print'画像が大き過ぎます';
	}
	else
	{
		move_uploaded_file($movie_gazou['tmp_name'],'./gazou/'.$movie_gazou['name']);
		print'<img src="./gazou/'.$movie_gazou['name'].'">';
		print'<br/>';
	}
}

if($movie_movie['size'] > 0)
{
	if($movie_movie['size']>1000000)
	{
		print'動画が大き過ぎます';
	}
}
	else
	{
		move_uploaded_file($movie_gazou['tmp_name'],'./movie/'.$movie_gazou['name']);
		print'<img src="./mov/'.$movie_movie['name'].'">';
		print'<br/>';
	}
}




	print'上記の商品を追加します。<br/>';
	print'<form method="post" action="movie_add_done.php">';
	print'<input type="hidden" name="name" value="'.$movie_name.'">';
	print'<input type="hidden" name="movie" value="'.$movie_movie.'">';
	print'<input type="hidden" name="img" value="'.$movie_gazou.'">';
	print'<br />';
	print'<input type="button" onclick="history.back()" value="戻る">';
	print'<input type="submit" value="OK">';
	print'</form>';	


?>

</body>
</html>