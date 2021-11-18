<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;

class PatientController extends Controller
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
        $patients = DB::select('select * from patients');
        return view('admin.patient.index', ['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patient.new');
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
            'name' => ['required'],
            'sex' => ['required'],
            "phoneNumber" => ['required'],
            "streetName" => ['required'],
            "streetNumber" => ['required'],
            "streetDistrict" => ['required'],
            "city" => ['required'],
            "state" => ['required'],
            "birthDate" => ['required'],
            "cpf" => ['required', 'unique:patients'],
            "email" => ['required', 'email', 'unique:patients'],
            "color" => ['required'],
            "civilState" => ['required'],
            "religion" => ['required'],
            "scholarship" => ['required'],
            "profession" => ['required'],
            "placeOfBirth" => ['required'],
            "weight" => ['required','digits_between:1,3'],
            "height" => ['required','digits_between:1,3'],
        ]);
        Patient::create($request->all());
        return redirect()->route('admin.patient');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.patient.show', ['id' => $id]);
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
        return redirect()->route('admin.patient');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('admin.patient');
    }
}
