<?php

	// �f�[�^�x�[�X�ɐڑ�
	$link = mysql_connect('localhost', 'root', '');
	if(!$link){
		die('�f�[�^�x�[�X�ɐڑ��ł��܂���F' . mysql_error());
	}

	// 	�f�[�^�x�[�X��I������
	mysql_select_db('oneline_bbs', $link);

	$errors = array();

	// POST�Ȃ�ۑ��������s
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		// ���O�����������͂���Ă��邩�`�F�b�N


		// �ЂƂ��Ƃ����������͂���Ă��邩�`�F�b�N


		// �G���[��������Εۑ�

	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<title>�ЂƂ��ƌf����</title>
</head>

<body>
	<h1>�ЂƂ��ƌf����</h1>

	<form action="bbs.php" method="post">
		���O�F<input type="text" name="name" /><br>
		�ЂƂ��ƁF<input type="text" name="comment" size="60" /><br>
		<input type="submit" name="submit" value="���M" />
	</form>

</body>

</html>
