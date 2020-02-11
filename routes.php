<?php
	return  [
			'' => ['App\Controller\Contact' => 'index'],
			'/contact' => ['App\Controller\Contact' => 'index'],
			'/contact/save' => ['App\Model\Repository\ContactRepository' => 'save'],
			'/contact/extract' => ['App\Model\Repository\ContactRepository' => 'extract']
		];
?>