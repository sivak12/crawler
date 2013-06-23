
<?php
 
	require 'Slim/Slim.php';
	use Slim\Slim;
	\Slim\Slim::registerAutoloader();
	include_once("simple_html_dom.php");
	
	$app = new Slim();
	
	
	/*Get all links on page*/
	$app->get('/links',function($url) use($app) {
		$html = file_get_html($url);

		foreach($html->find("a") as $link) {
		echo $link->href."<br/>";
				
		
	});
	
	
	

	
	$app->run();

 ?>