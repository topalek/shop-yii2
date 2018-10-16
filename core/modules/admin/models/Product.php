<?php

namespace app\modules\admin\models;

use yii\behaviors\SluggableBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product".
 *
 * @property int    $id
 * @property int    $category_id
 * @property string $title Заголовок
 * @property string $price Цена
 * @property string $slug Слаг
 * @property string $content Описание
 * @property string $description Описание
 * @property string $keywords Ключевые слова
 * @property string $salePrice Скидка
 * @property int    $status Публиковать
 * @property int    $hit Хит
 * @property int    $sale Распродажа
 * @property int    $new Новый
 * @property int    $viewCount Количество просмотров
 * @property string $updated_at Дата обновления
 * @property string $created_at Дата создания
 *
 * @property        $category Category
 */
class Product extends ActiveRecord {

	public $images;
	public $imgFiles;
	public $categoryId;

	public static function tableName(){
		return 'product';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		return [
            [['title', 'category_id'], 'required'],
			[['price', 'salePrice'], 'number'],
			[['content', 'description'], 'string'],
            [['status', 'hit', 'category_id', 'sale', 'new', 'viewCount'], 'integer'],
			[['updated_at', 'created_at'], 'safe'],
			[['title', 'slug', 'keywords'], 'string', 'max' => 255],
			[['images'], 'file', 'extensions' => 'png,jpeg,jpg', 'skipOnEmpty' => true, 'maxFiles' => 8]
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels(){
		return [
            'id'          => 'ID',
            'category_id' => 'Категория',
            'title'       => 'Название',
            'price'       => 'Цена',
            'slug'        => 'Слаг',
            'content'     => 'Описание',
            'description' => 'Описание SEO',
            'keywords'    => 'Ключевые слова',
            'salePrice'   => 'Цена скидки',
            'status'      => 'Опубликовать',
            'hit'         => 'Хит',
            'sale'        => 'Распродажа',
            'new'         => 'Новинка',
            'images'      => 'Галерея',
            'viewCount'   => 'Кол-во просмотров',
            'updated_at'  => 'Дата обновления',
            'created_at'  => 'Дата создания',
		];
	}

	public function behaviors(){
		return [
			'image' => [
				'class' => 'rico\yii2images\behaviors\ImageBehave',
			],
			'seo'   => [
				'class'     => SluggableBehavior::class,
				'attribute' => 'title',
			],
		];
	}

    public function getCategory()
    {
        $this->hasOne(Category::class, ['id' => 'category_id']);
    }

	public function uploadGallery(){
		if ($this->validate()){
			foreach ($this->imgFiles as $image){
                $path = 'uploads/images/store/' . $image->baseName . '.' . $image->extension;
				$image->saveAs($path);
				$this->attachImage($path, false);
				@unlink($path);
			}

			return true;
		}

		return false;
	}
}
