<?php
define('LANG', true); // The user doesn't get anywhere w/o words in the interface. :P
if (!empty($_GET['lang']))
	$lang = $_GET['lang'];
	else if (!empty($_COOKIE['lang']))
			$lang = $_COOKIE['lang'];
			else $lang = 'en';

// $lang = ($lang == 'sv') ? 'sv' : 'en';

setcookie('lang', $lang);
include('./lang/' . $lang . '.php');
include('./connection.php');
include('./inc/shopFunctions.php');
where_am_i(('shopOverall' || 'index' || 'shopUsers'),'');
echo '<br><br><div class="menu">';
        $sql = "SELECT * FROM {$prefix}pages";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
		{
			if (!$row->prio==0)
			  echo '<a href="index.php?page=' . $row->pID . '">' . $row->pagename. '</a> ';
		}
echo '<br><!-- If user logged in and admin, functions yet to be done. --> | <a href="./adm/">[ REAL ACP ] </a>';
echo '<a href="shopUsers.php">[ shopUsers.php ] </a></div>';

echo '<img id="logo" src="styles/' . $style . '/img/shop_logo.png">';

echo $lang['TEST'] . '<br>';
		// Notice: Undefined index: page in /home/peetra/public_html/shop/menu.php on line 13
        switch(@$_GET['page'])
		{
			case 0:
				echo 'case 0, hidden content - HÄÄ-HÄÄ';
				break;
			case 1:
			echo basename(__FILE__);
			case 2:
				// Just an exmple
				$arr = explode('.', basename(__FILE__));
				var_dump($arr[0]);
				break;
			case '':
				break;
			case '':
				break;
			case '':
				break;
				break;
				default:
				echo 'HÄÄ-HÄÄ - default:No page indexed - HÄÄ-HÄÄ';
		}
		        mysql_free_result($result);
where_am_i('','shopOverall');

?>
