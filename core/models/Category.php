<?php

namespace app\models;

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
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
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
            'title'       => 'Заголовок',
            'description' => 'Описание',
            'keywords'    => 'Ключевые слова',
        ];
    }
}
