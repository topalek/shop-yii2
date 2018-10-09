<?php

use yii\db\Migration;

/**
 * Class m181009_115550_modify_price_column
 */
class m181009_115550_modify_price_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('product', 'price', $this->decimal(10, 2)->comment('Цена')->notNull());
        $this->alterColumn('product', 'salePrice', $this->decimal(10, 2)->comment('Скидка')->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('product', 'salePrice', $this->decimal(10, 2)->comment('Скидка')->null());
        $this->alterColumn('product', 'price', $this->decimal(10, 2)->comment('Цена')->notNull());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_115550_modify_price_column cannot be reverted.\n";

        return false;
    }
    */
}
