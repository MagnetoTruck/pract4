	<?php

	require('lib/page.php');
	require('lib/header.php');
	require('lib/menu.php');
	require('lib/contents.php');
	require('lib/footer.php');

	$links=array(
		'Inici' => 'https://www.google.es',
		'Nosaltres' => 'https://www.youtube.es'
		);

	define('LAYOUT',
			'<!DOCTYPE html>
			<html>
			<head>
			<style type="text/css" media="screen">'
		);

	$css=file_get_contents('static/css.css');

	$page1=new Page('http://www.ingenuity.com/wp-content/uploads/2013/02/iReport-logo-color-transparent.png',
					'Page test',$links,'Lorem ipsum salamama dlaam lamama malam aal','Footer to wapo',$css);