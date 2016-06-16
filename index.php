<html>
<head>
<title>Send Me</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans|Montserrat' rel='stylesheet' type='text/css'>
<link href="style/bootstrap/css/bootstrap.css" rel="stylesheet" />
<link href="style/bootstrap/css/style.css" rel="stylesheet" />
<meta charset="utf-8" />
</head>
<body>

     <div class="images">
      


        <a href="https://www.facebook.com/O0XO0"><img  title="تابعنا على الفيسبوك" src="img/facebook.png" width="50%" /></a>
         <a href="https://github.com/AhmadHani"><img  title="GitHub"  src="img/github.png" width="50%" /></a>
        <a href="send.php"><img title="اتصل بنا" src="img/send.png" width="50%" /></a>
 </div>
 <div class="home">
  <center><a href="index.html"><img title="الرئيسية" src="img/home.png" width="50%" /></a></center>
  </div>
 <div class="all">
<div class="form_send">
<?php

$username = strip_tags($_POST['username']);
$email = strip_tags($_POST['email']);
$title = strip_tags($_POST['title']);
$subject = strip_tags($_POST['subject']);

if(isset($_POST['send'])) {
	
if(empty($username) or empty($email) or empty($title) or empty($subject)) {
	
echo '<div class="alert alert-danger" role="alert">الرجاء ملئ الحقول</div>';
	
}else {
	$email = "ektsarat123@gmail.com";
 mail($email,$title,$subject);
echo '<div class="alert alert-success" role="alert">تم إرسال الرسالة بنجاح</div>';	
}
}






?>
<form action="send.php" method="post">
<table width="100%" border="0">

<tr>
<td>Username : </td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Email : </td>
<td><input type="email" name="email" /></td>
</tr>
<tr>
<td>Title : </td>
<td><input type="text" name="title" /></td>
</tr>
<tr>
<td>Subject : </td>
<td><textarea name="subject"></textarea></td>
</tr>

</table>
<table width="100%" border="0">
<tr>
<td><center><button type="submit" name="send" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span>               Send               </button>
</center></td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>