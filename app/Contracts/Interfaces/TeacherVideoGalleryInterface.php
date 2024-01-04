<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface TeacherVideoGalleryInterface extends ShowInterface, StoreInterface, DeleteInterface
{
    /**
     * getFirst
     *
     * @return mixed
     */
    public function getFirst(): mixed;
}
