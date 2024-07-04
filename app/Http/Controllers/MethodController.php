<?php

namespace App\Http\Controllers;

use App\Models\Method;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MethodController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Method::paginate(30);
        return view('method.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('method.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'sort' => 'required',
            'photo' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $tmp_path = date('Y')."/".date('m')."/".date('d')."/".$request->photo->getFilename().'.'.$request->photo->getClientOriginalExtension();
            $path = $request->photo->storeAs('public/images', $tmp_path);
            $request->photo = str_replace("public", "storage", $path);
        }


        Method::create([
            'title' => $request->title,
            'url' => Str::slug($request->title, '-'),
            'text' => $request->text,
            'sort' => $request->sort,
            'photo' => $request->photo,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);


        return redirect('/methods')->with('status', 'Успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function show(Method $method)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function edit(Method $method)
    {
        return view('method.edit', compact('method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Method $method)
    {

        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'photo' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $tmp_path = date('Y')."/".date('m')."/".date('d')."/".$request->photo->getFilename().'.'.$request->photo->getClientOriginalExtension();
            $path = $request->photo->storeAs('public/images', $tmp_path);
            $request->photo = str_replace("public", "storage", $path);
        }


        $method->update([
            'title' => $request->title,
            'url' => Str::slug($request->title, '-'),
            'text' => $request->text,
            'sort' => 'required',
            'sort' => $request->sort,
            'photo' => $request->photo,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);


        return redirect()->back()->with('status', 'Успешно добавлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function destroy(Method $method)
    {
        //
    }
}
