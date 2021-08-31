<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $GetData = \DB::table('homework')
        ->select('homework.id_homework',
        'homework.Name_Student',
        'homework.Description_Homework',
        'homework.State_Homework',
        'homework.Date_Homework',
        'homework.Hour_Homework')
        ->orderby('homework.id_homework','DESC')
        ->paginate(12);

        return view('Homework.index', ['GetHomeworks'=>$GetData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Homework.create');
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
        $HomeworkData = request()->except('_token');
        Homework::insert($HomeworkData);
        return redirect('Homeworks')->with('mensaje','Se AGREGO la TAREA con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function edit($id_homework)
    {
        //
        $HomeworkEditData=Homework::findOrFail($id_homework); 
        return view('Homework.edit', compact('HomeworkEditData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_homework)
    {
        //
        $HomeworkData = request()->except(['_token','_method']);
        Homework::where('id_homework','=',$id_homework)->update($HomeworkData);

        $HomeworkEditData=Homework::findOrFail($id_homework); 
        return view('Homework.edit', compact('HomeworkEditData'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_homework)
    {
        //
        Homework::destroy($id_homework);
        return redirect('Homeworks')->with('mensaje','Se BORRO la tarea con exito');
    }
}
