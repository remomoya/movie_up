

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>movie</title>
</head>
<body>

<?php

try
{

$dsn='mysql:dbname=movie;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql ='SELECT name,img,movie FROM mst_movie WHERE 1';
$stmt =$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print '動画一覧<br/><br/>';

print'<form method="post" action="movie_branch.php">';
while(true)
{
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print'<input type="radio" name="moviecode" value="'.$rec['code'].'">';
	print $rec['name'].'---';
	print '<img src="./img/'.$rec['img'].'">';
	print '<img src="./mv/'.$rec['movie'].'">';
	print '<br/>';
}
print'<input type="submit" name="disp" value="参照">';
print'<input type="submit" name="add" value="追加">';
print'<input type="submit" name="edit" value="修正">';
print'<input type="submit" name="delete" value="削除">';
print'</form>';


catch (Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<br/>
<a href="../account/account_top.php">トップメニューへ</a><br/>

</body>
</html>