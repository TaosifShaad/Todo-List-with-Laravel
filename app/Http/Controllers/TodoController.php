<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index() {
        $all = Todo::all();

        return view('todo.index', ['all' => $all]);
    }

    public function create() {
        return view('todo.create');
    }

    public function upload(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $todo = $request->title;
        Todo::create(['title' => $todo]);
        return redirect()->back()->with('success', 'TODO created successfully');
        // return redirect('/index');
    }

    public function edit($id) {
        $todo = Todo::find($id);
        return view('todo.edit', ['id' => $id, 'todo' => $todo]);
    }

    public function update(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $updated = Todo::find($request->id);
        $updated->update(['title' => $request->title]);
        // return redirect('/index');
        return redirect()->back()->with('success', 'TODO updated successfully');
    }

    public function complete($id) {
        $todo = Todo::find($id);
        if ($todo->completed) {
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', 'Marked as incomplete!');
        } else {
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', 'Marked as complete!');
        }
    }

    public function delete($id) {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/index');
    }
}
