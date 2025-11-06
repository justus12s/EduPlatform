<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'course_code',
        'course_name',
        'description',
        'credits',
        'teacher_id',
        'schedule',
        'classroom',
        'max_students',
        'status'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'course_code' => 'required|is_unique[courses.course_code]',
        'course_name' => 'required',
        'credits' => 'required|integer',
        'teacher_id' => 'required|integer'
    ];

    public function getStudentCourses($studentId)
    {
        // Cette requête suppose qu'il y a une table 'student_courses' qui lie les étudiants aux cours
        // Si tu as une structure différente, adapte-la
        return $this->db->table('courses')
            ->select('courses.*, users.first_name as teacher_first_name, users.last_name as teacher_last_name')
            ->join('student_courses', 'student_courses.course_id = courses.id')
            ->join('users', 'users.id = courses.teacher_id')
            ->where('student_courses.student_id', $studentId)
            ->where('courses.status', 'active')
            ->get()
            ->getResultArray();
    }

    protected $validationMessages = [
        'course_code' => [
            'required' => 'Le code du cours est obligatoire.',
            'is_unique' => 'Ce code de cours est déjà utilisé.'
        ],
        'course_name' => [
            'required' => 'Le nom du cours est obligatoire.'
        ],
        'credits' => [
            'required' => 'Le nombre de crédits est obligatoire.',
            'integer' => 'Le nombre de crédits doit être un entier.'
        ],
        'teacher_id' => [
            'required' => 'L\'enseignant est obligatoire.',
            'integer' => 'L\'enseignant doit être un entier.'
        ]
    ];
}
