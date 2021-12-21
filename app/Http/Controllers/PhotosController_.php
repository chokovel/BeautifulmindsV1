<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Album;
use File;
use App\Traits\ImageUpload;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('photos.index')
        ->with('photos', Photo::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Album $album_id)
    {
        return view('photos.create')
        ->with('album_id', $album_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Photo $photo)
    {
        if($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('public/images');
        }
        // $photo->save();

        $albums = Album::where('id', $album_id)->firstOrFail();

        $photo = Photo::create([ 
            'photo' => $photo,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'album_id' => $albums,
            'slug' => SlugService::createSlug(Photo::class, 'slug', $request->title),
           
        ]);

        session()->flash('success', 'photo created successfully');
        return redirect(route('photos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('photos.show')
            ->with('photo', Photo::with('Photos')->where('slug', $slug)->first());
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
