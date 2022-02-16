<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('villas.index', [
            'villas' => Villa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('villas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $villa = Villa::create($data); // or doing $request->only(['title', 'content'])

        
        
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $request->session()->flash('status', 'The Reservation was created successfuly');
        
        // return redirect()->route('villas.show', ['post' => $post->id]);
        return redirect('/villas'); // redirect work automatically with GET method
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Faire appel à la méthode find du modèle
        $villa = Villa::find($id);
        return view('villas.show', compact('villa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villa = Villa::findOrFail($id); // Instead of using find() we used findOrFail() even if not exist the specific element will display 404|Not Found 
        return view('villas.edit', compact('villa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'dest' => 'required',
            'adult' => 'required',
            'children' => 'required',
        ]); 
        Villa::findOrFail($id)->update($request->all()); 
        $request->session()->flash('status', 'Villa update success');
        return redirect()->route('villas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Villa::destroy($id);

        // or we can use this method

        // $post = Post::where('id', $id)->first();

        // if($post != null) {
        //     $post->delete();
        //     return redirect()->route('villas.index');
        // }

        return redirect()->route('villas.index')->with('status', 'The Villa was deleted !');

        // Post::find($id)->delete();
        // return redirect()->route('villas.index')->with('success','Post deleted success');
    }
}
