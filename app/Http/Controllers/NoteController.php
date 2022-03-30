<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        return view('note', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->service_type == "0")
            $request->service_type = "Hardware";
        else if($request->service_type == "1")
            $request->service_type = "Software";

        $validated = $request->validate([
            'purchase_id' => 'required', 
            'service_type' => 'required', 
            'service_notes' => 'required', 
       ]);

       $note = Note::create([ 
            'purchase_id' => $request->purchase_id,
            'service_type' => $request->service_type, 
            'service_notes' => $request->service_notes, 
       ]);

       return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($purchase_id)
    {
        $all_notes = DB::table('notes')
                ->where('purchase_id', '=', $purchase_id)
                ->get();
        //$all_notes = $note->purchase->notes;
        //$note = Note::find($purchase_id);
        //$all_notes = $note->purchase->notes;
        return view('notes.show',compact('all_notes'));
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
