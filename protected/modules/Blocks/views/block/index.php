<?php
/* @var $this BlockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blocks',
);

$this->menu=array(
	array('label'=>'Create Blocks', 'url'=>array('create')),
	array('label'=>'Manage Blocks', 'url'=>array('admin')),
);
?>

<h1>Blocks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
