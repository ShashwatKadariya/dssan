<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GalleryFormRequest;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'DESC')->get();
        $images = Image::where('gallery_id', '>', 0)->get('gallery_id');
        return view('admin.gallery.index', compact('galleries', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.create', compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryFormRequest $request)
    {
        $validatedData = $request->validated();
        $uploadedImage = $validatedData['cover_image'];

        $imageName = time() . '-' . $uploadedImage->getClientOriginalName();
        $validatedData['cover_image'] = $request->file('cover_image')->storeAs('gallery/cover', $imageName);

        Gallery::create($validatedData);
        return redirect()->route('gallery.index')->with('success', 'Gallery Created Succesfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryFormRequest $request, $id)
    {
        // update gallery image
        $gallery = Gallery::find($id);
        $validatedData = $request->validated();
        $uploadedImage = $validatedData['cover_image'];

        $imageName = time() . '-' . $uploadedImage->getClientOriginalName();
        $validatedData['cover_image'] = $uploadedImage->storeAs('gallery/cover', $imageName);


        if (!is_null($gallery->image))
            Storage::delete($gallery->cover_image);
        // save to gallery
        $gallery->update($validatedData);
        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
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
        $gallery = Gallery::find($id);
        if (!is_null($gallery->cover_image)) {
            Storage::delete($gallery->cover_image);
        }
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
