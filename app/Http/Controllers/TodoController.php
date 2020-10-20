<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use function compact;
use function dd;
use function dump;
use function redirect;
use function view;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('todo', compact('todo'));
    }
    public function create(Request $request){

        $this ->validate($request,[
            "name"=>"required",
            "description"=>"required"
        ]);

        $todo = new Todo();

        $todo ->name = $request ->input('name');
        $todo ->description = $request ->input('description');

        $todo ->save();

        return redirect::back()->with('status','working');
    }

    public function destroy(Todo $todo){
        $todo->delete();
        return redirect('/')->with('status','deleted');
    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('edit',compact('todo','id'));
    }

    public function update(Request $request, $id){
        $todo = Todo ::find($id);
        $this ->validate($request,[
        'name' => 'required',
        'description' => 'required'
        ]);
        $input = $request ->all();
        $todo->fill($input)->save();
        return redirect()->route('todo')->with('success', 'user updated successfully');
    }

    // public function destroy(Todo $todo){
    //     $todo->delete();
    //     return redirect('/todo')->with('status','deleted');
    // }
}
