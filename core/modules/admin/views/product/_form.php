<?php

use app\modules\admin\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form box-body">
	<?php dd(Category::getList()); ?>
	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'categoryId')->dropDownList(Category::getList()) ?>

	<?= $form->field($model, 'price', ['options' => ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'salePrice', ['options' => ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'status', ['options' => ['class' => 'col-md-2']])->checkbox() ?>

	<?= $form->field($model, 'hit', ['options' => ['class' => 'col-md-2']])->checkbox() ?>

	<?= $form->field($model, 'sale', ['options' => ['class' => 'col-md-2']])->checkbox() ?>

	<?= $form->field($model, 'new', ['options' => ['class' => 'col-md-2']])->checkbox() ?>

    <div class="form-group">
		<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

	<?php ActiveForm::end(); ?>

</div>
