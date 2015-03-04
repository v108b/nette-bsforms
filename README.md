V108B/BSForms
======
Form Component for Nette Framework with Twitter Bootstrap templates


Requirements
------------

V108B/BSForms requires PHP 5.3.2 or higher.

- [Nette Framework](https://github.com/nette/nette)


Installation
------------

The best way to install martiman/bsforms is using  [Composer](http://getcomposer.org/):

```sh
$ composer require v108b/nette-bsforms
```


##Usage 1
```
		$bsform = new bsforms\BSForm();
		$form = $bsform->getFormClean();
		$form->addGroup('');
		$form->addText('searchText', 'SearchText:');
		$form->addSubmit('doSearch', 'Search!');
```

##Usage 2
```
		$bsform = new bsforms\BSForm('Detail');
		$form = $bsform->getFormPanel();
		$form->addGroup('');
		$form->addText('searchText', 'SearchText:');
		$form->addSubmit('doSearch', 'Search!');
```
