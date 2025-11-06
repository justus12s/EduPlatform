<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'auth'     => \App\Filters\AuthFilter::class,
        'admin'    => \App\Filters\AuthFilter::class,
        'teacher'  => \App\Filters\AuthFilter::class,
        'student'  => \App\Filters\AuthFilter::class,
    ];

    public $globals = [
        'before' => [
            'csrf' => ['except' => ['api/*']],
        ],
        'after' => [
            'toolbar' => ['except' => ['api/*']],
        ],
    ];

    public $methods = [];

    public $filters = [
        'admin' => [
            'before' => ['admin/dashboard', 'admin/*']
        ],
        'teacher' => [
            'before' => ['enseignant/dashboard', 'enseignant/*']
        ],
        'student' => [
            'before' => ['etudiant/dashboard', 'etudiant/*']
        ]
    ];
}
