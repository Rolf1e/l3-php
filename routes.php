<?php
	return  [
			'' => ['App\Controller\Contact' => 'index'],
			'/contact' => ['App\Controller\Contact' => 'index'],
			'/contactform' => ['App\Controller\Contact' => 'render'],
			'/contact/save' => ['App\Model\Repository\ContactRepository' => 'save'],
			'/contact/extract' => ['App\Model\Repository\ContactRepository' => 'extract'],
			'/contact/extractall' => ['App\Model\Repository\ContactRepository' => 'extractall']
		];
?>