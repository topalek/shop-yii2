<?php

use app\modules\admin\models\Category;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $categories Category[] */


$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create box">

    <?= $this->render('_form', ['model' => $model, 'categories' => $categories]) ?>

</div>
