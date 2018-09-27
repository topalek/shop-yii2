<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view box">
    <div class="box-body">

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data'  => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method'  => 'post',
                ],
            ]) ?>
        </p>
        <?= DetailView::widget([
            'model'      => $model,
            'attributes' => [
                'id',
                [
                    'attribute' => 'parent_id',
                    'value'     => function ($model) {
                        return ($model->parent) ? $model->parent->title : 'Родительская';
                    },
                ],
                'title',
                'slug',
                'description:ntext',
                'keywords',
            ],
        ]) ?>
        <p>
            <br>
            <?= Html::a('Создать новую', ['category/create'], ['class' => 'btn btn-success']) ?>

        </p>
    </div>

</div>
