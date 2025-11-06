<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignKeys extends Migration
{
    public function up()
    {
        // Clés étrangères pour la table courses
        $this->db->query("
            ALTER TABLE courses 
            ADD CONSTRAINT fk_courses_teacher_id 
            FOREIGN KEY (teacher_id) REFERENCES users(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ");

        // Clés étrangères pour la table grades
        $this->db->query("
            ALTER TABLE grades 
            ADD CONSTRAINT fk_grades_student_id 
            FOREIGN KEY (student_id) REFERENCES users(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ");

        $this->db->query("
            ALTER TABLE grades 
            ADD CONSTRAINT fk_grades_course_id 
            FOREIGN KEY (course_id) REFERENCES courses(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ");

        $this->db->query("
            ALTER TABLE grades 
            ADD CONSTRAINT fk_grades_submitted_by 
            FOREIGN KEY (submitted_by) REFERENCES users(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ");

        $this->db->query("
            ALTER TABLE grades 
            ADD CONSTRAINT fk_grades_approved_by 
            FOREIGN KEY (approved_by) REFERENCES users(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ");

        // Clés étrangères pour la table schedules
        $this->db->query("
            ALTER TABLE schedules 
            ADD CONSTRAINT fk_schedules_course_id 
            FOREIGN KEY (course_id) REFERENCES courses(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ");

        $this->db->query("
            ALTER TABLE schedules 
            ADD CONSTRAINT fk_schedules_teacher_id 
            FOREIGN KEY (teacher_id) REFERENCES users(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ");

        $this->db->query("
            ALTER TABLE schedules 
            ADD CONSTRAINT fk_schedules_created_by 
            FOREIGN KEY (created_by) REFERENCES users(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ");
    }

    public function down()
    {
        // Supprimer les contraintes
        $this->db->query("ALTER TABLE courses DROP FOREIGN KEY fk_courses_teacher_id");
        $this->db->query("ALTER TABLE grades DROP FOREIGN KEY fk_grades_student_id");
        $this->db->query("ALTER TABLE grades DROP FOREIGN KEY fk_grades_course_id");
        $this->db->query("ALTER TABLE grades DROP FOREIGN KEY fk_grades_submitted_by");
        $this->db->query("ALTER TABLE grades DROP FOREIGN KEY fk_grades_approved_by");
        $this->db->query("ALTER TABLE schedules DROP FOREIGN KEY fk_schedules_course_id");
        $this->db->query("ALTER TABLE schedules DROP FOREIGN KEY fk_schedules_teacher_id");
        $this->db->query("ALTER TABLE schedules DROP FOREIGN KEY fk_schedules_created_by");
    }
}
