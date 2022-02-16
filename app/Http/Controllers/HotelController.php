<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotels.index', [
            'hotels' => Hotel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
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
        $hotel = Hotel::create($data); // or doing $request->only(['title', 'content'])

        
        
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $request->session()->flash('status', 'The Reservation was created successfuly');
        
        // return redirect()->route('posts.show', ['post' => $post->id]);
        return redirect('/hotels'); // redirect work automatically with GET method
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Faire appel à la méthode find du modèle
        $hotel = Hotel::find($id);
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id); // Instead of using find() we used findOrFail() even if not exist the specific element will display 404|Not Found 
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'dest' => 'required',
            'adult' => 'required',
            'children' => 'required',
        ]); 
        Hotel::findOrFail($id)->update($request->all()); 
        $request->session()->flash('status', 'Hotel update success');
        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::destroy($id);

        // or we can use this method

        // $post = Post::where('id', $id)->first();

        // if($post != null) {
        //     $post->delete();
        //     return redirect()->route('posts.index');
        // }

        return redirect()->route('hotels.index')->with('status', 'The Hotel was deleted !');

        // Post::find($id)->delete();
        // return redirect()->route('posts.index')->with('success','Post deleted success');
    }
}
