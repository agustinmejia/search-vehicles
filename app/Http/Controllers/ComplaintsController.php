<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;
use Carbon\Carbon;

// Models
use App\Models\Complaint;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('complaints.browse');
    }

    public function list(){
        $data = Complaint::with(['vehicle.brand', 'vehicle.vehicles_type.vehicles_class', 'city.province', 'person', 'user', 'assigned'])->where('deleted_at', NULL)->get();
        // return $data;

        return
            Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('person', function($row){
                return $row->person->name.' '.$row->person->first_name.' '.$row->person->last_name;
            })
            ->addColumn('assigned', function($row){
                return $row->assigned->name;
            })
            ->addColumn('city', function($row){
                return $row->city->name.'<br><small>'.$row->city->province->name.' - '.$row->city->province->state.'</small>';
            })
            ->addColumn('vehicle_class', function($row){
                return $row->vehicle->vehicles_type->vehicles_class->name;
            })
            ->addColumn('details', function($row){
                return '<ul>
                            <li><b>Tipo</b>: '.$row->vehicle->brand->name.' '.$row->vehicle->vehicles_type->name.'</li>
                            <li><b>Nro de placa</b>: '.($row->vehicle->plate_number ?? 'S/N').'</li>
                            <li><b>Nro de chasis</b>: '.$row->vehicle->chassis_code.'</li>
                            <li><b>Nro de motor</b>: '.$row->vehicle->engine_code.'</li>
                        </ul>';
            })
            ->addColumn('action', function($row){
                $actions = '
                    <div class="no-sort no-click bread-actions text-right">
                        <a href="'.route('complaints.show', ['complaint' => $row->id]).'" title="Ver" class="btn btn-sm btn-warning view">
                            <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Ver</span>
                        </a>
                        <button title="Borrar" class="btn btn-sm btn-danger delete" data-toggle="modal" data-target="#delete_modal" onclick="deleteItem('."'".url("admin/complaints/".$row->id)."'".')">
                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Borrar</span>
                        </button>
                    </div>
                        ';
                return $actions;
            })
            ->rawColumns(['person', 'assigned', 'city', 'vehicle_class', 'details', 'action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('complaints.edit-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        DB::beginTransaction();
        try {
            Complaint::create([
                'vehicle_id' => $request->vehicle_id,
                'city_id' => $request->city_id,
                'person_id' => $request->person_id,
                'user_id' => Auth::user()->id,
                'assigned_id' => $request->assigned_id,
                'type' => $request->type,
                'address' => $request->address,
                'address_zone' => $request->address_zone,
                'location' => $request->location,
                'details' => $request->details,
                'description' => $request->description,
                'date' => $request->date.' '.$request->time
            ]);

            DB::commit();
            return redirect()->route('complaints.index')->with(['message' => 'Registro guardado exitosamente.', 'alert-type' => 'success']);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('complaints.index')->with(['message' => 'Ocurrio un error.', 'alert-type' => 'error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
