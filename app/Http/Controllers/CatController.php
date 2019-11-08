<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Http\Requests\CreateCatRequest;

class CatController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('isAdmin');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCats = Cat::withTrashed()->get();
        // dd($listCats->first());
        //select * from cats;
        $title= 'List Cat';
        return view('cats.list_cat', compact('listCats', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats.create_cat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCatRequest $request)
    {
        $data =$request->except('_token');
        // dd($data);
        Cat::create($data);
        return redirect()->route('list-cat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::find($id);
        // dd($cat);
        if($cat) {
            return view('cats.cat_detail', compact('cat'));

        }
        echo 'not found';
        //select * from cats where id= $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat= Cat::find($id);
        return view('cats.form_edit_cat', compact('cat'));
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
        $cat = Cat::find($id);
        $data= $request->only('name', 'age', 'breed_id');
        $cat->update($data);
        return redirect()->route('list-cat');
    }

    public function updateCat(Request $request, $id)
    {
        $cat= Cat::find($id);
        $data= $request->all();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cat::destroy($id);
        return redirect()->route('list-cat');
    }

    public function restore($id)
    {
        $cat = Cat::find($id);
        $cat->restore();
        return redirect()->route('list-cat');
    }

    public function forceDelete($id)
    {
        $cat= Cat::find($id);
        $cat->forceDelete();
        return redirect()->route('list-cat');
    }
}
