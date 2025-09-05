<?php
// conexao do PHP com Mysql
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBBASE', 'padaria');
 
$conexao = mysqli_connect(DBHOST, DBUSER, DBPASS, DBBASE);
 

?>