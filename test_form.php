<?php
/*
 * Created on 16 Sep 2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!DOCTYPE html>
<html>
<head>
<title> drunr :: Test_Form </title>
</head>
<body>
<form action="drunr.php" method="post" enctype="multipart/form-data">	
	<span class="fn">Host:</span>
	<input type="text" class="text" name="DBHOST" id="DBHOST" value="iconicaelixia.com" size="40" maxlength="40">
	<br>
	<span class="fn">Port:</span>
	<input type="text" class="text" name="DBPORT" id="DBPORT" value="3306" size="40" maxlength="4" />
	<br>
	<span class="fn">Username:</span>
	<input type="text" class="text" name="DBUNAME" id="DBUNAME" value="Username" size="40" maxlength="40" />
	<br>
	<span class="fn">Password:</span>
	<input type="password" class="password" name="DBPASSW" id="DBPASSW" size="40" maxlength="40" />
	<br>
	<span class="fn">Database:</span>
	<input type="text" class="text" name="DBNAME" id="DBNAME" value="Database_Name" size="40" maxlength="40" />
	<br>
	<span class="fn">Query:</span>
	<textarea name="DBQUERY" rows="10" cols="40" wrap="on"></textarea>
	<br>
	<input type="submit" class="submit button" name="QUERY" value="QUERY" />
</form>
