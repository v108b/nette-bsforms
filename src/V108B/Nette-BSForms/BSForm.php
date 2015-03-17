<?php

namespace V108B\NetteBSForms;

use Nette,
	Nette\Application\UI;

class BSForm extends UI\Control {

	private $defaultFormStyle;
	private $defaultControlClass;	
	
	const STYLE_PANEL = 'panel';
	const STYLE_CLEAN = 'clean';

	
	public function __construct($defaultFormStyle = BSForm::STYLE_CLEAN, $defaultControlClass = "col-md-12") {
		$this->defaultFormStyle = $defaultFormStyle;
		$this->defaultControlClass = $defaultControlClass;
	}

	public function getTemplateFilename($style)
	{				
		switch($style ?: $this->defaultFormStyle) {
			case static::STYLE_PANEL: return 'BSFormPanel.latte';
			case static::STYLE_CLEAN: return 'BSFormClean.latte';
			default: return 'BSFormClean.latte';
		}
	}
	
	public function render($form = null, $style = null, $controlClass = null, $formName = "") {
		$this->template->setFile(__DIR__ . '/' . $this->getTemplateFilename($style));
		$this->template->controlClass = $controlClass ?: $this->defaultControlClass;
		$this->template->form = $form;
		$this->template->formName = $formName;
		$this->template->render();
	}
}
