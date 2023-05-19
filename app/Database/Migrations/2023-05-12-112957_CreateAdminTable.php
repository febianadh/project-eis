<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdminTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "nama" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "email" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "password" => [
                "type"=> "TEXT",
            ]
        ];
        $this->forge->addKey('id', true);
        $this->forge->addKey('email', false, true); // Uniqe Key
        $this->forge->addField($fields);
        $this->forge->createTable('admin', true); //If NOT EXISTS create table gallery2
    }


    public function down()
    {
        $this->forge->dropTable('admin', true); //If Exists drop table gallery2
    }
}
