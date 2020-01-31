<?php 
namespace App\Controller;

use App\Component\Header;

abstract class ControllerAbstract implements ControllerInterface {

	private $title = 'default';
	private $template;


	public function __construct() {
		$this->title = 'Default';
		$this->template = '';
	}

	public function render() {
		include_once 'app/template/header.phtml';
		include_once 'app/template/contact.phtml';
		include_once 'app/template/footer.phtml';
	}

	public function getTitle() {
		return $this->title;
	}

	public function getTemplate() {
		return $this->template;
	}
}

?>