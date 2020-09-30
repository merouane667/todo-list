<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;


class tasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tasks = Task::orderBy('id', 'DESC')->paginate(5);
        return view('tasks')->with('tasks', $tasks);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'task'=>'required'

        ]);

        $task = new Task;
        $task->title=$request->input('title');
        $task->task=$request->input('task');
        $task->save();
        return redirect('/')->with('success','Your task was created ! ');

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
        $task = Task::find($id);
        return view('/edit')->with('task',$task);
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
         $this->validate($request,[
            'title'=>'required',
            'task'=>'required'

        ]);
        
        $task = Task::find($id);
        $task->title=$request->input('title');
        $task->task=$request->input('task');
        $task->save();
        
        return redirect('/')->with('success','Your task was modified');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/');
    }

    public function completed($id)
    {
        $task = Task::find($id);
        $task->completed=1;
        $task->save();
        return redirect('/');
    }
}
