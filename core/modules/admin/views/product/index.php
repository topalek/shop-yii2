<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
		<?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'title',
			'price',
			'slug',
			'content:ntext',
			//'description:ntext',
			//'keywords',
			//'salePrice',
			//'status',
			//'hit',
			//'sale',
			//'new',
			//'viewCount',
			//'updated_at',
			//'created_at',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>
