<?php

use yii\db\Migration;

/**
 * Handles the creation of table `electricity`.
 */
class m180704_133613_create_electricity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('electricity', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
            'date' => $this->timestamp(),
	        'electricityMeter' =>  $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('electricity');
    }
}
