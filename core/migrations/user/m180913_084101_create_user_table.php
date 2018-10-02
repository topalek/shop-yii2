<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180913_084101_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
	        'id'           => $this->primaryKey(),
	        'email'        => $this->string()->notNull()->comment('E-mail'),
	        'username'     => $this->string()->notNull()->comment('Имя'),
	        'password'     => $this->string()->notNull()->comment('Пароль'),
	        'status'       => $this->smallInteger()->defaultValue(0),
	        'auth_key'     => $this->string()->notNull(),
	        'access_token' => $this->string(),
	        'code'         => $this->string(),
	        'is_email'     => $this->smallInteger()->defaultValue(1),
	        'updated_at'   => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->comment("Дата обновления"),
	        'created_at'   => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->comment('Дата создания'),
        ]);

        $this->insert('user', [
            'id'       => 1,
            'password' => '$2y$13$Xeho97wOCw5WNolYUQBsE.Y218re5K2kmPpZtH68TfstsJOnbfNFm',
            'email'    => 'admin@example.com',
            'username' => 'Admin',
            'status'   => 1,
            'auth_key' => 'NrmwHdntFKHOeTEXaWVCN0kZbeH4z97T',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
