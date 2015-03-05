<?php

namespace V108B\NetteBSForms;

use Nette,
	Nette\Application\UI;

class BSForm extends UI\Control {

	private $form;
	private $formName;
	private $style = null;

	const STYLE_PANEL = 'panel';
	const STYLE_CLEAN = 'clean';

	public function __construct($formName = '') {
		$this->formName = $formName;
	}

	public function getFormClean() {
		$this->style = static::STYLE_PANEL;
		return $this;
	}

	public function getFormPanel() {
		$this->style = static::STYLE_PANEL;
		return $this;
	}

	public function createComponentForm()
	{
		return new UI\Form();
	}

	public function getTemplateFilename($style)
	{
		switch($style) {
			case static::STYLE_PANEL: return 'BSFormPanel.latte';
			case static::STYLE_CLEAN: return 'BSFormClean.latte';
			default: return 'form.latte';
		}
	}

	public function render($style = null) {
		$this->template->setFile(__DIR__ . '/' . $this->getTemplateFilename($style ?: $this->style));
		$this->template->controlClass = 'col-md-3';
		$this->template->form = $this['form'];
		$this->template->formName = $this->formName;
		$this->template->render();
	}
}
