<?php

use yii\db\Migration;

/**
 * Class m230316_155540_Dado
 */
class m230316_155540_Dado extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Dado', [
            'id'=>$this->primaryKey(),
            'nome'=>$this->string(200)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Dado');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230316_155540_Dado cannot be reverted.\n";

        return false;
    }
    */
}
