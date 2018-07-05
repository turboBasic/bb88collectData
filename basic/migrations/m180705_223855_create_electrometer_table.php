<?php

use yii\db\Migration;

/**
 * Handles the creation of table `electrometer`.
 */
class m180705_223855_create_electrometer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('electrometer', [
            'datetime' => $this->datetime()->primaryKey()->notNull(),
            'kwh' => $this->bigint()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDowm()
    {
        $this->dropTable('electrometer');
    }

}
