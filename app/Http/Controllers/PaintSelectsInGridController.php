<?php

namespace App\Http\Controllers;

use App\Models\Locations\City;
use Illuminate\Support\Facades\DB;

class PaintSelectsInGridController extends Controller {
    public function __invoke(City $city)
    {
        $arrayContent['cities']='<option>-</option>';
        foreach (\App\Models\Locations\City::where('state_id',$city->state_id)->get() as $item){
            $arrayContent['cities'].='<option value="'.$item->id.'" '.($item->id===$city->id?'selected':'').' >'.$item->description.'</option>';
        }
        $arrayContent['states']='<option>-</option>';
        foreach (\App\Models\Locations\State::where('country_id',$city->state->country_id)->get() as $item){
            $arrayContent['states'].='<option value="'.$item->id.'" '.($item->id===$city->state_id?'selected':'').' >'.$item->description.'</option>';
        }
        $arrayContent['countries']='<option>-</option>';
        foreach (\App\Models\Locations\Country::get() as $item){
            $arrayContent['countries'].='<option value="'.$item->id.'" '.($item->id===$city->state->country->id?'selected':'').' >'.$item->description.'</option>';
        }
        return response()->json($arrayContent);
    }
}