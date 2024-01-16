<?php

namespace App\Contracts\Repositories;

use App\Models\Regency;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\RegencyInterface;
use App\Contracts\Repositories\BaseRepository;

class RegencyRepository extends BaseRepository implements RegencyInterface
{
    public function __construct(Regency $regency)
    {
        $this->model = $regency;
    }

    /**
     * Handle get data from models.
     *
     * @param request $request
     *
     * @return mixed
     */
    public function search(Request $request) : mixed
    {
        return $this->model->query()
        ->when($request->province,function($query) use ($request){
            $query->where('province_id',$request->province);
        })->get();
    }
}
