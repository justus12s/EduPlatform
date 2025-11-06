<?php

namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table = 'schedules';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'event_type',
        'title',
        'description',
        'course_id',
        'teacher_id',
        'date',
        'start_time',
        'end_time',
        'location',
        'created_by'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'event_type' => 'required|in_list[course,exam,outing]',
        'title' => 'required',
        'date' => 'required|valid_date',
        'start_time' => 'required',
        'end_time' => 'required',
        'created_by' => 'required|integer'
    ];

    protected $validationMessages = [
        'event_type' => [
            'required' => 'Le type d\'événement est obligatoire.',
            'in_list' => 'Le type d\'événement doit être parmi: course, exam, outing.'
        ],
        'title' => [
            'required' => 'Le titre est obligatoire.'
        ],
        'date' => [
            'required' => 'La date est obligatoire.',
            'valid_date' => 'La date doit être une date valide.'
        ],
        'start_time' => [
            'required' => 'L\'heure de début est obligatoire.'
        ],
        'end_time' => [
            'required' => 'L\'heure de fin est obligatoire.'
        ],
        'created_by' => [
            'required' => 'Le créateur est obligatoire.',
            'integer' => 'Le créateur doit être un entier.'
        ]
    ];
}
