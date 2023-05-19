<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGalleryTable extends Migration
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
            "tahun" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "seniman" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "deskripsi" => [
                "type"=> "TEXT",
                "constraint" => "60000",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('gallery2', true); //If NOT EXISTS create table gallery2
    }


    public function down()
    {
        $this->forge->dropTable('gallery2', true); //If Exists drop table gallery2
    }
}
