<?php

use yii\db\Migration;

/**
 * Handles dropping title and content from table `electricity`.
 */
class m180704_163411_drop_title_column_from_electricity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('electricity', 'title');
        $this->dropColumn('electricity', 'content');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('electricity', 'title', $this->string());
        $this->addColumn('electricity', 'content', $this->text());
    }
}
