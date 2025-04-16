<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ArticalController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('permission:view artical', only: ['index']),
            new Middleware('permission:edit artical', only: ['edit']),
            new Middleware('permission:create artical', only: ['create']),
            new Middleware('permission:delete artical', only: ['destroy']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articals = Artical::latest()->paginate(5);
        return view('articals.list',[
            'articals' => $articals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|min:3',
            'author' => 'required|min:3',
            'text' => 'required|min:3',
        ]);

        if($validator->passes()){
            $artical = new Artical();
            $artical->title = $request->title;
            $artical->text = $request->text;
            $artical->author = $request->author;
            $artical->save();
            return redirect()->route('artical.index')->with('success','Artical Successfully Created!');
        }else{
            return redirect()->route('artical.create')->withInput()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artical = Artical::findOrFail($id);
        return view('articals.edit',[
            'artical' => $artical
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|min:3',
            'author' => 'required|min:3',
            'text' => 'required|min:3',
        ]);

        if($validator->passes()){
            $artical = Artical::find($id);
            $artical->title = $request->title;
            $artical->text = $request->text;
            $artical->author = $request->author;
            $artical->save();
            return redirect()->route('artical.index')->with('success','Artical Successfully Updated!');
        }else{
            return redirect()->route('artical.create')->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $permission = Artical::find($id);

        if($permission == null){
            session()->flash('error','Artical not found!');
            return response()->json([
                'status' => false
            ]);
        }

        $permission->delete();
        session()->flash('success','Artical Deleted Successfully!');
        return response()->json([
            'status' => true
        ]);
    }
}
