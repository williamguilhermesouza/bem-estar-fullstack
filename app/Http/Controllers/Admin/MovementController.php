<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movement;


class MovementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = DB::select('select * from movements');
        $patients = DB::select('select * from patients');
        return view('admin.movement.index', ['movements' => $movements, 'patients' => $patients]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = DB::select('select * from patients');
        return view('admin.movement.new', ['patients' => $patients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patientId' => [],
            'description' => ['required'],
            "value" => ['required'],
        ]);

        Movement::create($request->all());
        return redirect()->route('admin.movement');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patients = DB::select('select * from patients');
        $movement = DB::table('movements')->find($id);
        return view('admin.movement.show', ['patients' => $patients, 'movement' => $movement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patients = DB::select('select * from patients');
        $movement = DB::table('movements')->find($id);
        return view('admin.movement.edit', ['patients' => $patients, 'movement' => $movement]);
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
        $values = $request->all();
        unset($values['_token']);
        Movement::where('id', $id)->update($values);
        return redirect()->route('admin.movement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movement = Movement::find($id);
        $movement->delete();
        return redirect()->route('admin.movement');
    }
}
