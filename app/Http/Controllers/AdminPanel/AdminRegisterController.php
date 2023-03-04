<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\ClubRegister;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ClubRegister::all();
        return view('admin.registers', ['data' => $data]);
    }

    public function storeregister(Request $request)
    {
        $data = new ClubRegister();
        $data->name = $request->input('first_name');
        $data->surname = $request->input('last_name');
        $data->faculty = $request->input('academic_unit');
        $data->department = $request->input('academic_department');
        $data->year = $request->input('year');
        $data->no = $request->input('student_number');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone_number');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('uyeol')->with('info', 'Kaydınız Oluşturulmuştur, Teşekkürler.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
