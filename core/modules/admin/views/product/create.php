<?php


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title                   = 'Создать новый';
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create box">

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
