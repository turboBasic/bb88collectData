<?php

use yii\db\Migration;

/**
 * Handles dropping id from table `electricity`.
 */
class m180704_164109_drop_id_column_from_electricity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('electricity', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('electricity', 'id', $this->primaryKey());
    }
}
