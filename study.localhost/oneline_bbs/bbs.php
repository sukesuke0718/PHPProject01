<?php

	// データベースに接続
	$link = mysql_connect('localhost', 'root', '');
	if(!$link){
		die('データベースに接続できません：' . mysql_error());
	}

	// 	データベースを選択する
	mysql_select_db('oneline_bbs', $link);

	$errors = array();

	// POSTなら保存処理実行
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		// 名前が正しく入力されているかチェック


		// ひとことが正しく入力されているかチェック


		// エラーが無ければ保存

	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<title>ひとこと掲示板</title>
</head>

<body>
	<h1>ひとこと掲示板</h1>

	<form action="bbs.php" method="post">
		名前：<input type="text" name="name" /><br>
		ひとこと：<input type="text" name="comment" size="60" /><br>
		<input type="submit" name="submit" value="送信" />
	</form>

</body>

</html>
