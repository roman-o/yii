<?php
/* @var $this LocalController */
/* @var $model Local */

$this->breadcrumbs=array(
	'Locals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Local', 'url'=>array('index')),
	array('label'=>'Manage Local', 'url'=>array('admin')),
);
?>

<h1>Создать адресс</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>