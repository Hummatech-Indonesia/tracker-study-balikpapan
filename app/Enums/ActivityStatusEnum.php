<?php

namespace App\Enums;

enum ActivityStatusEnum: string
{
    case WORK = 'work';
    case STUDY = 'study';
    case NOTWORK = 'notwork';
    case BUSSINESS = 'bussiness';
}
