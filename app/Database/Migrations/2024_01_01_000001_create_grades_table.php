<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGradesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'student_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'course_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'grade' => [
                'type' => 'DECIMAL',
                'constraint' => [4, 2],
            ],
            'comment' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'submitted_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'submitted_at' => [
                'type' => 'DATETIME',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['pending', 'approved', 'rejected'],
                'default' => 'pending',
            ],
            'approved_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'approved_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        // $this->forge->addForeignKey('student_id', 'users', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('submitted_by', 'users', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('approved_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('grades');
    }

    public function down()
    {
        $this->forge->dropTable('grades');
    }
}
