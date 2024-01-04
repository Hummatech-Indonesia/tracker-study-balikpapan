<?php

namespace App\Enums;

enum UploadDiskEnum: string
{
    case THUMBNAIL = 'thumbnail';
    case TEACHERGALLERY = 'teahcer_gallery';
    case TEACHERVIDEOGALLERY = 'teahcer_video_gallery';
    case ALUMNIVIDEOGALLERY = 'alumni_video_gallery';
}
