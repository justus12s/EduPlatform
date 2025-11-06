<?php

namespace App\Models;

use CodeIgniter\Model;

class GradeModel extends Model
{
    protected $table = 'grades';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'student_id',
        'course_id',
        'grade',
        'comment',
        'submitted_by',
        'submitted_at',
        'status',
        'approved_by',
        'approved_at'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;

    // Validation
    protected $validationRules = [
        'student_id' => 'required|integer',
        'course_id' => 'required|integer',
        'grade' => 'required|decimal',
        'submitted_by' => 'required|integer'
    ];

    protected $validationMessages = [
        'student_id' => [
            'required' => 'L\'étudiant est obligatoire.',
            'integer' => 'L\'étudiant doit être un entier.'
        ],
        'course_id' => [
            'required' => 'Le cours est obligatoire.',
            'integer' => 'Le cours doit être un entier.'
        ],
        'grade' => [
            'required' => 'La note est obligatoire.',
            'decimal' => 'La note doit être un décimal.'
        ],
        'submitted_by' => [
            'required' => 'L\'enseignant qui soumet est obligatoire.',
            'integer' => 'L\'enseignant doit être un entier.'
        ]
    ];
}
