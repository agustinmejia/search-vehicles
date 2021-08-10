<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Models
use App\Models\Complaint;

class HomeController extends Controller
{
    public function search(Request $request){
        $search = $request->search;
        $complaint = Complaint::with(['vehicle.brand', 'vehicle.vehicles_type.vehicles_class', 'city.province', 'person', 'user', 'assigned'])
                    ->whereHas('vehicle', function($q) use($search){
                        $q->whereRaw('( (plate_number is not NULL && plate_number like "%'.$search.'%") or engine_code like "%'.$search.'%" or chassis_code like "%'.$search.'%" )');
                    })
                    ->orWhereHas('vehicle.brand', function($q) use($search){
                        $q->whereRaw('name like "%'.$search.'%"');
                    })
                    ->orWhereHas('vehicle.vehicles_type', function($q) use($search){
                        $q->whereRaw('name like "%'.$search.'%"');
                    })
                    ->orWhereHas('vehicle.vehicles_type.vehicles_class', function($q) use($search){
                        $q->whereRaw('name like "%'.$search.'%"');
                    })
                    ->orWhereHas('city', function($q) use($search){
                        $q->whereRaw('name like "%'.$search.'%"');
                    })
                    ->orWhereHas('city.province', function($q) use($search){
                        $q->whereRaw('(name like "%'.$search.'%" or state like "%'.$search.'%")');
                    })
                    ->orWhereHas('person', function($q) use($search){
                        $q->whereRaw('(name like "%'.$search.'%" or first_name like "%'.$search.'%" or last_name like "%'.$search.'%")');
                    })
                    ->orWhereHas('assigned', function($q) use($search){
                        $q->whereRaw('name like "%'.$search.'%"');
                    })
                    ->where('deleted_at', NULL)->get();
                    // dd($complaint);
        return view('vendor.voyager.index-search', compact('complaint'));
    }
}
