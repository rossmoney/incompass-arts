<?php
$page = strtolower($_GET['page']);
if($page == "") $page = "home";
if(file_exists($page . ".php"))
{
	include_once($page . ".php");
} else {
	header("Location:404");
}
?>