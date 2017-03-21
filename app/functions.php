<?php 
/*

	The below function prevent Cross Server Script(XSS) from being executed onto the text fields if someone with ill-intent were to gain access of the administrative panel(CMS).

*/

function e($text) {
	return htmlspecialchars($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

?>