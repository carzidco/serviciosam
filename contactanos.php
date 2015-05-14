<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Index</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php include('tgeneralscript.php'); ?>
</head>

<body>
<div id="principal">
<?php include('theader.php')?>
<div id="body_area">
  <?php include('tleftmenu.php') ?>
  <div class="midarea">
    <div class="head"> Cont&aacute;ctanos </div>
    <div class="body_textarea">
      <div align="justify">
		<form id="contact-form" method="post" action="emails/Send.php">
			<label class="labelcontactenos">Nombre</label>
			<input name="name" id="name" class="inputcontactenos inputcommon" />
			<br />
			<label class="labelcontactenos">E-mail</label>
			<input name="email" id="email" class="inputcontactenos inputcommon" />
			<br />
			<label class="labelcontactenos">Tel&eacute;fono</label>
			<input name="phone" id="phone" class="inputcontactenos inputcommon" />
			<br />
			<label class="labelcontactenos">Mensaje</label>
			<br />
			<textarea name="message" id="message" class="textareacontactenos inputcommon" rows="7" cols="53">
			</textarea>
			<br />
			<input type="submit" value="" class="submitContactenos" />
		</form>
	  </div>
    </div>
  </div>
  <div class="right">
    <?php include('tevents.php'); ?>
    <?php include('tlogin.php'); ?>
    <?php include('tnews.php'); ?>
  </div>
</div>
<?php include('tfooter.php')?>
</div>

</body>
</html>

