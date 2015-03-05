v108b/nette-bsforms
======
Form Component for Nette Framework with Twitter Bootstrap templates


Requirements
------------

v108b/nette-bsforms requires PHP 5.3.2 or higher.

- [Nette Framework](https://github.com/nette/nette)


Installation
------------

The best way to install martiman/bsforms is using  [Composer](http://getcomposer.org/):

```sh
$ composer require v108b/nette-bsforms
```


##Usage 1
```
		$bsform = new NetteBSForms\BSForm();
        	$form = $bsform['form'];
        	$form->addGroup('');
        	$form->addText('searchText', 'SearchText:');
        	$form->addSubmit('doSearch', 'Search!');
        
		{control bsForm panel}
```

##Usage 2
```
		$bsform = new NetteBSForms\BSForm('Detail');
		$form = $bsform->getFormPanel();
		$form->addGroup('');
		$form->addText('searchText', 'SearchText:');
		$form->addSubmit('doSearch', 'Search!');
```
