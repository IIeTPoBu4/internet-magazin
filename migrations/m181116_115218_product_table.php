<?php

use yii\db\Migration;

/**
 * Class m181116_115218_product_table
 */
class m181116_115218_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string(),
            'content' => $this->text(),
            'price' => $this->float(),
            'keywords'=>$this->string(),
            'description'=>$this->string(),
            'img'=>$this->string(),
            'hit'=>$this->text(),
            'new'=>$this->text(),
            'sale'=>$this->text(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_115218_product_table cannot be reverted.\n";

        return false;
    }
    */
}
