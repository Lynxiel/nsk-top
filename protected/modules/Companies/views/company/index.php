<?php
/* @var $this CompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Companies',
);

$this->menu=array(
	array('label'=>'Create Companies', 'url'=>array('create')),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
);
?>

<h1>Companies</h1>

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>
<!--Usefull example-->
<?php //echo TbHtml::thumbnails(array(
//    array('image' => 'images/big.png', 'url' => '#', 'span' => 4),
//    array('image' => 'images/average.png', 'url' => '#', 'span' => 3),
//    array('image' => 'images/small.png', 'url' => '#', 'span' => 2),
//    array('image' => 'images/average.png', 'url' => '#', 'span' => 3),
//    array('image' => 'images/small.png', 'url' => '#', 'span' => 2),
//)); ?>

<?php echo TbHtml::thumbnails(array(
    array('image' => 'images/big.png', 'label' => 'Thumbnail label', 'caption' => '...' , 'action'=>'#' ),
    array('image' => 'images/big.png', 'label' => 'Thumbnail label', 'caption' => '...'),
    array('image' => 'images/big.png', 'label' => 'Thumbnail label', 'caption' => '...'),
), array('span' => 4)); ?>
