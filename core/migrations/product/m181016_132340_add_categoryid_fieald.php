<?php

use app\modules\admin\models\Product;
use yii\db\Migration;

/**
 * Class m181016_132340_add_categoryid_fieald
 */
class m181016_132340_add_categoryid_fieald extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Product::tableName(), 'category_id', $this->integer()->notNull()->comment('Категория')->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(Product::tableName(), 'category_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181016_132340_add_categoryid_fieald cannot be reverted.\n";

        return false;
    }
    */
}
