<?php

namespace App\Http\Controllers;

use App\Models\Horse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $horse = Horse::orderBy('id', 'asc')->paginate(3);
        return view('horse.index', ['horses' => $horse]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('horse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'colour' => 'required',
            'age' => 'required',
            'country' => 'required',
            'sex' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'microNo' => 'required',
            'passportNo' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
// dd($request->file('image')->extension());
        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/images', $imageName);

        $horseData = [
            'name' => $request->name,
            'colour' => $request->colour,
            'age' => $request->age,
            'country' => $request->country,
            'sex' => $request->sex,
            'father' => $request->father,
            'mother' => $request->mother,
            'microNo' => $request->microNo,
            'passportNo' => $request->passportNo,
            'image' => $imageName,
            'flag' => '0',
        ];

        Horse::create($horseData);
        return redirect('/horse')->with(['message' => 'Horse added successfully!', 'status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function show(Horse $horse)
    {
        //
        return view('horse.show', ['horse' => $horse]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function edit(Horse $horse)
    {
        //
        return view('horse.edit', ['horse' => $horse]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horse $horse)
    {
        //
        $imageName = '';
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->storeAs('public/images', $imageName);
            if ($horse->image) {
                Storage::delete('public/images' . $horse->image);
            }
        } else {
            $imageName = $horse->image;
        }

        $horseData = [
            'name' => $request->name,
            'colour' => $request->colour,
            'age' => $request->age,
            'country' => $request->country,
            'sex' => $request->sex,
            'father' => $request->father,
            'mother' => $request->mother,
            'microNo' => $request->microNo,
            'passportNo' => $request->passportNo,
            'image' => $imageName
        ];

        $horse->update($horseData);
        return redirect('/horse')->with(['message' => 'Horse updated successfully!', 'status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horse $horse)
    {
        //
        Storage::delete('public/images/' . $horse->image);
        $horse->delete();
        return redirect('/horse')->with(['message' => 'Horse deleted successfully!', 'status' => 'success']);
    }
}
