<?php

namespace App\Enums;

enum UploadDiskEnum: string
{
    case THUMBNAIL = 'thumbnail';
    case TEACHERGALLERY = 'teahcer_gallery';
    case TEACHERVIDEOGALLERY = 'teahcer_video_gallery';
    case ALUMNIVIDEOGALLERY = 'alumni_video_gallery';
    case SLIDERGALLERYALUMNI = 'slider_gallery_alumni';
    case GALLERYALUMNI = 'gallery_alumni';
    case CV = 'cv';
    case PROFILE = 'profile';
    case PHOTOPORTOFOLIO = 'photo_portofolio';
}
