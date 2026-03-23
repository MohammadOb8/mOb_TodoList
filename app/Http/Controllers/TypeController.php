<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\Task;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('mObType')->with('types',$types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Type::create([
            'type' => $request->type
        ]);

      /*  $type = new Type;
        $type->type= $request->type;
        $type->save();
        $type->orderBy('created_at', 'desc')->get();*/
        return redirect()->route('mob.indexType');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::with('tasks')->find($id);

        return view('typeTasks',[
            'tasks' => $type->tasks,
            'typeName' => $type->type,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::find($id);
        return view('editType')->with('type',$type);
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

        $type = Type::find($id);
        $type->type = $request->type;
        $type->save();
        return redirect()->route('mob.indexType');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
        $defaultType = Type::where('type','Unknown')->first();
        $type->tasks()->update(['type_id'=> $defaultType]);
       /*a way to delete the accosiated tasks:
       1) $type->tasks()->delete();
       2) using ondelete('cascade') in the task migration on the forgine key of type;
       3) when deleting the type the tasks get a default type instead;
       */
        return redirect()->back();
    }
}
