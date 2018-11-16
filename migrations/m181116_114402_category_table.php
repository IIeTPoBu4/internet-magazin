<?php

use yii\db\Migration;

/**
 * Class m181116_114402_category_table
 */
class m181116_114402_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'name' => $this->text(),
            'keywords' => $this->text(),
            'description' => $this->text(),
            


        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_114402_category_table cannot be reverted.\n";

        return false;
    }
    */
}
