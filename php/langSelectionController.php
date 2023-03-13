<?php

getLanguage();

function getLanguage()
{
	$lang = 'fr';
	if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		$lang = in_array($lang, ['fr', 'en', 'ja']) ? $lang : 'fr';
	}
	$_SESSION['lang'] = isset($_SESSION['lang']) ? $_SESSION['lang'] : $lang;
	$_SESSION['lang'] = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : $_SESSION['lang'];
	$_SESSION['lang'] = isset($_POST['lang']) ? $_POST['lang'] : $_SESSION['lang'];
	$_SESSION['lang'] = isset($_GET['lang']) ? $_GET['lang'] : $_SESSION['lang'];
}

function getCorrespondingData($page, $str)
{
	$lang = simplexml_load_file('languages/lang.xml')->{$_SESSION['lang']}->{$page};
	if(!empty($lang->{$str}))
	{
		return $lang->{$str};
	}
	return $str;
}
