<?php

use yii\db\Schema;
use yii\db\Migration;

class m151220_183223_init_database extends Migration
{
    public function up()
    {

        $dbSchema = file_get_contents(__DIR__.'/mysqldumptest.sql') ;
        $this->execute($dbSchema);

    }

    public function down()
    {
        echo "m151220_183223_init_database cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
