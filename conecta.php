<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
function conecta_bd()
{
$link=mysql_connect("localhost","root","vertrigo");
if ($link && mysql_select_db("rejoc1"))

return($link);
return(FALSE);
}
/*
if (!conecta_bd)
print("Falha na conex�o...");
else
print("Conex�o OK!!!");
*/

?>

</body>
</html>
