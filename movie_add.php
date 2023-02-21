
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>movie</title>
</head>
<body>
新規動画追加<br/>
<br/>
<form method="post" action="movie_add_check.php" enctype="multipart/form-data">
動画名を入力してください。
<input type="text" name="name" style="width:200px"><br/>
動画を選んでください。
<input type="file" name="movie" style="width:400px"><br/>
画像を選んでください。<br/>
<input type="file" name="gazou" style="width:400px"><br/>
<br/>
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>


</body>
</html>
