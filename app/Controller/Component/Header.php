<?php 
namespace App\Controller\Component;

class Header implements Component {

	private $template;
	private $title;
	private $core;
	
	public function __construct(String $title) {
		$this->title = $title;
		$this->template = 'header';
	}

	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTemplate($template) {
		$this->template = $template;
		return $this;
	}

	public function getTemplate() : String {
		return $this->template;
	}

	public function getCore() {
		return $this->core;
	}

	public function setCore($core = '') {
		$this->core = $core;
		return $this;
	} 

}

?>