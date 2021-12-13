<?php

use yii\db\Migration;

/**
 * Class m211206_072321_shop
 */
class m211206_072321_shop extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211206_072321_shop cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('shop', [
            'id'=>$this->primaryKey(),
            'name'=>$this->string(),
            'price'=>$this->integer(),
            'count'=>$this->integer(),
        ]);
    }

    public function down()
    {
        echo "m211206_072321_shop cannot be reverted.\n";

        return false;
    }

}
