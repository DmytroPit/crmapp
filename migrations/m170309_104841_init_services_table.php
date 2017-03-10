<?php

use yii\db\Migration;

class m170309_104841_init_services_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'service',
            [
                'id' => 'pk',
                'name' => 'string unique',
                'hourly_rate' => 'int',
            ]//,
            //'ENGINE=InnoDB'
        );
    }

    public function down()
    {
        $this->dropTable('service');
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
