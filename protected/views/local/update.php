<?php
/* @var $this LocalController */
/* @var $model Local */

$this->breadcrumbs=array(
	'Locals'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Local', 'url'=>array('index')),
	array('label'=>'Create Local', 'url'=>array('create')),
	array('label'=>'View Local', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Local', 'url'=>array('admin')),
);
?>

<h1>Update Local <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>