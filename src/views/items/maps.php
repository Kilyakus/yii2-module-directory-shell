<?php
use bin\admin\widgets\Maps;
use kilyakus\web\widgets as Widget;

$this->title = $model->title . ': ' . Yii::t('easyii', 'Maps');
?>

<?= $this->render('_menu', ['category' => $model->category]) ?>

<?php Widget\Portlet::begin([
    'options' => ['class' => 'kt-portlet--tabs', 'id' => 'kt_page_portlet'],
    'headerContent' => $this->render('_submenu', ['model' => $model])
]); ?>
	<?= Maps::widget(['model' => $model])?>
<?php Widget\Portlet::end(); ?>