<?php

use yii\db\Migration;

/**
 * Class m200508_074329_create_table_user
 */
class m200508_074329_create_table_user extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey()->unsigned(),
            'username' => $this->string(255)->notNull(),
            'password' => $this->string(255)->notNull(),
            'auth_key' => $this->string(255)->defaultValue(null),
        ]);
    }

    public function down()
    {
        echo "m200508_074329_create_table_user cannot be reverted.\n";
        $this->dropTable('user');
        return false;
    }

}
