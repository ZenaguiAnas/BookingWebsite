<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('apartments.index', [
            'apartments' => Apartment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartments.create');
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
        $apartment = Apartment::create($data); // or doing $request->only(['title', 'content'])

        
        
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $request->session()->flash('status', 'The Reservation was created successfuly');
        
        // return redirect()->route('apartments.show', ['post' => $post->id]);
        return redirect('/apartments'); // redirect work automatically with GET method
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Faire appel à la méthode find du modèle
        $apartment = Apartment::find($id);
        return view('apartments.show', compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartment = Apartment::findOrFail($id); // Instead of using find() we used findOrFail() even if not exist the specific element will display 404|Not Found 
        return view('apartments.edit', compact('apartment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'dest' => 'required',
            'adult' => 'required',
            'children' => 'required',            
        ]); 
        Apartment::findOrFail($id)->update($request->all()); 
        $request->session()->flash('status', 'Apartment update success');
        return redirect()->route('apartments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // or we can use this method

        // $post = Post::where('id', $id)->first();

        // if($post != null) {
        //     $post->delete();
        //     return redirect()->route('apartments.index');
        // }

        return redirect()->route('apartments.index')->with('status', 'The Apartment was deleted !');

        // Post::find($id)->delete();
        // return redirect()->route('apartments.index')->with('success','Post deleted success');
    }
}
