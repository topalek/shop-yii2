<?php
/**
 * Created by topalek
 * Date: 28.09.2018
 * Time: 17:02
 */

namespace app\controllers;


use app\common\BaseController;
use app\modules\admin\models\Category;
use yii\data\ActiveDataProvider;

class CategoryController extends BaseController
{
    public function actionView($slug)
    {
	    $categoryIds  = Category::find()->where(['slug' => $slug])->with('children')->select(['id'])->column();
        $dataProvider = new ActiveDataProvider([
	        'query'      => '',
	        'pagination' => [
                'pageSize' => 20,
            ],
        ]);


    }
}