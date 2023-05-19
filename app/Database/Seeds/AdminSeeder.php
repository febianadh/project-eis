<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'Admin',
            'email'    => 'admin@mail.com',
            'password'    => md5("secret"),
        ];

        // Simple Queries
        $this->db->table('admin')->insert($data);

        $data = [
            'nama' => 'Admin 2',
            'email'    => 'admin2@mail.com',
            'password'    => md5("secret123"),
        ];

        // Simple Queries
        $this->db->table('admin')->insert($data);
    }
}
