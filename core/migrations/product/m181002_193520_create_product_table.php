<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m181002_193520_create_product_table extends Migration {
	/**
	 * {@inheritdoc}
	 */
	public function safeUp(){
		$this->createTable('product', [
			'id'          => $this->primaryKey(),
			'title'       => $this->string(255)->notNull()->comment('Заголовок'),
			'price'       => $this->decimal(2)->comment('Цена'),
			'slug'        => $this->string(255)->comment('Слаг'),
			'content'     => $this->text()->comment('Описание'),
			'description' => $this->text()->comment('Описание'),
			'keywords'    => $this->string(255)->comment('Ключевые слова'),
			'salePrice'   => $this->decimal(2)->comment('Скидка'),
			'status'      => $this->smallInteger()->defaultValue(0)->comment('Публиковать'),
			'hit'         => $this->smallInteger()->defaultValue(0)->comment('Хит'),
			'sale'        => $this->smallInteger()->defaultValue(0)->comment('Распродажа'),
			'new'         => $this->smallInteger()->defaultValue(1)->comment('Новый'),
			'viewCount'   => $this->integer()->defaultValue(0)->comment('Количество просмотров'),
			'updated_at'  => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->comment("Дата обновления"),
			'created_at'  => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->comment('Дата создания'),
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown(){
		$this->dropTable('product');
	}
}
