<?php
	return  [
			'' => ['App\Controller\Contact' => 'index'],
			'/contact' => ['App\Controller\Contact' => 'index'],
			'/contactform' => ['App\Controller\ContactForm' => 'render'],
			'/contact/save' => ['App\Model\Repository\ContactRepository' => 'save'],
			'/contact/extract' => ['App\Controller\Contact' => 'show'],
			'/contact/extractall' => ['App\Controller\Contact' => 'showAll']
		];
?>