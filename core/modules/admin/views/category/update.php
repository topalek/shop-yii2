<?php

use app\modules\admin\models\Category;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $categories Category[] */


$this->title                   = 'Обновить: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="category-update box">

    <?= $this->render('_form', ['model' => $model, 'categories' => $categories]) ?>

</div>
