<?php

namespace App\Enums;

enum StatusEnum: string
{
    case ACTIVE = 'active';
    case NONACTIVE = 'nonactive';
    case REJECT = 'reject';
}
