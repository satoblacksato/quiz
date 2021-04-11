<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/***
 * Class DependenciesController
 * @package App\Http\Controllers
 * @description Controller by items dependencies in forms of user
 */
class DependenciesController extends Controller {
    public function __invoke($type,$id=0)
    {
      return DB::table($type)
            ->when($type==='cities',function ($query) use($id){
                $query->where('state_id',$id);
            })->when($type==='states',function ($query) use($id){
                $query->where('country_id',$id);
            })->pluck('description','id')->toArray();
    }
}