<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'teacher', 'student'],
                'default' => 'student'
            ],
            'institution' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'avatar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1
            ],
            'email_verified' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0
            ],
            'remember_token' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'remember_expires' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'reset_token' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'reset_expires' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'last_access' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('email');
        $this->forge->addKey('remember_token');
        $this->forge->addKey('reset_token');

        $this->forge->createTable('users', true);

        // Ajouter un utilisateur admin par défaut
        $this->db->table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'System',
            'email' => 'admin@eduplatform.com',
            'password' => password_hash('Admin123!', PASSWORD_DEFAULT),
            'role' => 'admin',
            'institution' => 'EduPlatform',
            'avatar' => 'https://ui-avatars.com/api/?name=Admin+System&background=667eea&color=fff',
            'is_active' => 1,
            'email_verified' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('users', true);
    }
}
