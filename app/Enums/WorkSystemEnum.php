<?php

namespace App\Enums;

enum WorkSystemEnum: string
{
    case CONTRACT = 'contract';
    case PERMANENTWORK = 'permanentwork';
    case WORKINGPARTTIME = 'workingparttime';
    case FREELANCE = 'freelance';
}
