<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'change-alumni-select',
        'change-student-select',
        'verification-student-all',
        'reject-student-all',
        'approve-verify-company-all',
        'reject-verify-company-all'
    ];
}
