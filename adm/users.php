<?php // adm/users.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = (isset($_GET['title'])) ? $_GET['title'] : $lang['ACP_USERS_TITLE'];
echo '<div id="acp-top-explanation"><h3>' . $lang['ACP_USERS_TITLE'] . '</h3>';
echo '<p>' . $lang['ACP_USERS_EXPLAIN'] . '</p></div>';

?>
<div id="sidemenu">
	<ul>
		<li><a href="./usersEdit.php"><?php echo $lang['USERS_EDIT']?></a></li>
		<li><a href="./usersAdd.php"> <?php echo $lang['USERS_ADD']?></a></li>
		<li><a href="./usersDelete.php"><?php echo $lang['USERS_DEL']?></a></li>
	</ul>
</div>
<div>
<?php
$sql = "SELECT * FROM {$prefix}customers ORDER BY 'fname' ASC";
$result = mysql_query($sql);
while($row=mysql_fetch_object($result))
{
  echo '<small> ' . $row->uID . ' ';
  echo $row->fname . '__</small> ' ;
}
mysql_free_result($result);
?>
</div>
<?php
if (basename($who_am_i, ".php") == 'users') // basename returns the end of a path, here we exclude the fileextension
	include ('./style/footer.html');
?>
