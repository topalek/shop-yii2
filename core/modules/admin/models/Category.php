<?php

namespace app\modules\admin\models;

use yii\behaviors\SluggableBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int    $id
 * @property int    $parent_id
 * @property string $title       Заголовок
 * @property string $slug        Заголовок
 * @property string $description Описание
 * @property string $keywords    Ключевые слова
 */
class Category extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    public static function getList()
    {

	    $categories = self::find()->select(['id', 'parent_id', 'title'])->asArray()->all();
	    $categories = ArrayHelper::map($categories, 'id', 'title');
        return $categories;
	    $arr = [];
	    foreach ($categories[0] as $id => $cat){
		    try {
			    $arr[$id] = $cat;
		    }catch (\Exception $e){
			    dd($cat);
		    }
		    foreach ($categories[$id] as $i => $c_cat){
			    $arr[$i] = '-' . $c_cat;
		    }
	    }

	    //$arr = static::generateList($categories);


	    return $arr;
    }

    public static function getTree()
    {
        $cat = self::find()->asArray()->all();
        $parents = [];
        foreach ($cat as $i => $item) {
            $parents[$item['parent_id']][$item['id']] = $item;
        }
        $tree = $parents[0];
        self::generateTree($tree, $parents);
        return $tree;
    }

    private static function generateTree(&$tree, $parents)
    {
        foreach ($tree as $key => $item) {
            if (array_key_exists($key, $parents)) {
                $tree[$key]['children'] = $parents[$key];
                self::generateTree($tree[$key]['children'], $parents);
            }
        }
    }

	private static function generateList(&$array, $parent_id = 0)
    {
        $resArray = [];
        if (is_array($array)) {
	        foreach ($array as $cat){
		        $resArray[] = [$cat['id'], $cat['title']];
            }
	        if (array_key_exists('children', $array)){
		        $resArray[] = self::generateList($array['children']);
	        }
        }

	    return $resArray;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'parent_id'], 'required'],
            [['description'], 'string'],
            [['title', 'keywords', 'slug'], 'string', 'max' => 255],
            [['parent_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'          => 'ID',
            'parent_id'   => 'Родительская категория',
            'slug'        => 'Слаг',
            'title'       => 'Название',
            'description' => 'Описание',
            'keywords'    => 'Ключевые слова',
        ];
    }

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'seo' => [
                'class'     => SluggableBehavior::class,
                'attribute' => 'title',
            ],
        ]);
    }

    public function getParent()
    {
        return $this->hasOne(Category::class, ['id' => 'parent_id']);
    }

    public function getChildren()
    {
        return $this->hasMany(Category::class, ['parent_id' => 'id']);
    }
}
