<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;
use App\Models\Employee;
use App\Models\Purchase;
use App\Models\Manufacturer;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hardwares = Hardware::all();
        $manufacturers = Manufacturer::find()->hardwares();
        return view('hardware', compact('hardwares'), compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hardwares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->type == "0")
            $request->type = "Desktop";
        else if($request->type == "1")
            $request->type = "Laptop";
        else if($request->type == "2")
            $request->type = "Tablet";
        else if($request->type == "3")
            $request->type = "Phone";

        

        $validated = $request->validate([
            'employee_id' => 'required',
            'cpu' => 'required',
            'gpu' => 'required',
            'ram' => 'required',
            'type' => 'required',
            'manufacturer_id' => 'required',
       ]);

       $hardware = Hardware::create([ 
            'employee_id' => $request->employee_id,
            'cpu' => $request->cpu, 
            'gpu' => $request->gpu,
            'ram' => $request->ram, 
            'type' => $request->type,
            'manufacturer_id' => $request->manufacturer_id,
       ]);

       return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hardware = Hardware::find($id); 
        return view('hardwares.show',compact('hardware'));
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
