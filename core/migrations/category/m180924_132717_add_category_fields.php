<?php

use yii\db\Migration;

/**
 * Class m180924_132717_add_category_fields
 */
class m180924_132717_add_category_fields extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('category', 'parent_id', $this->integer()->after('id')->defaultValue(0)->comment('Родительская категория'));
        $this->addColumn('category', 'slug', $this->string(255)->after('title')->notNull()->comment('Слаг'));
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('category', 'slug');
        $this->dropColumn('category', 'parent_id');
    }

}
