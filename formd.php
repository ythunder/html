<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>表单反馈信息</title>
</head>

<body>
<?php
$name = $_POST['fname'];
$phone = $_POST['phone'];
$addres = $_POST['addres'];
$sex = $_POST['gen'];
$chicun = $_POST['chicun'];
$number = $_POST['number'];

if($_POST['Button']) {
	if(empty($_POST['fname'])) {
		echo "姓名不能为空!";
		exit;
	}
	if(empty($_POST['phone'])) {
		echo "电话不能为空!";
		exit;
	}
	if(empty($_POST['addres'])) {
		echo "地址不能为空!";
		exit;
	}
}
?>

<p align="center">您的输入为:</p>
<table width="500">
<tr>
	<td>用户名</td><td><?php echo $_POST['fname']; ?></td>
</tr>
<tr>
	<td>电话</td><td><?php echo $_POST['phone']; ?></td>
</tr>
<tr>
	<td>地址</td><td><?php echo $_POST['addres']; ?></td>
<tr>
<tr>
	<td>性别</td>
	<td><?php
switch($_POST['gen']) {
case 1: echo "男"; break;
case 2: echo "女"; break;
}
?>
</td>
</tr>
<tr>
<td>尺寸</td>
<td> <?php 
switch($_POST['尺寸']) {
case 0: echo "M码"; break;
case 1: echo "L码"; break;
case 2: echo "XL码"; break;
case 3: echo "XXL码"; break;
}
?>
</td>
</tr>
<tr>
<td>数量</td>
<td> <?php 
case 0: echo "0件"; break;
case 1: echo "1件"; break;
case 2: echo "2件"; break;
case 3: echo "3件"; break;
?>
</td>
</tr>
</table>

</body>
</html>
