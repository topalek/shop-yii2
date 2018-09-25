<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180913_075919_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id'          => $this->primaryKey(),
            'title'       => $this->string(255)->notNull()->comment('Заголовок'),
            'description' => $this->text()->comment('Описание'),
            'keywords'    => $this->string(255)->comment('Ключевые слова'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
