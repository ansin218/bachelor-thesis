<?php

	function f_protect_page() {
		if(f_logged_in() === false) {
			header('Location: index.php');
			exit();		
		} 
	}
	
	function user_protect_page() {
		if(f_logged_in() === false) {
			header('Location: fprotect.php');
			exit();		
		} 
	}
	
	function use_protect_page() {
		if(f_logged_in() === true) {
			header('Location: fprotect.php');
			exit();		
		} 
	}

	function f_logged_in_redirect() {
		if(f_logged_in() === true) {
			header('Location: index.php');
			exit();
		}
	}

	function array_sanitize(&$item) {
		$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
	}

	function sanitize($data) {
		return htmlentities(strip_tags(mysql_real_escape_string($data)));
	}

	function output_errors($errors) {
		return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
	}

?>