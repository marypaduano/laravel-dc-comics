<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {

        $comics = Comic::all();
        
        return view('comics.index', compact('comics'));
    }


    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->description = $data['description'];

        $new_comic->save();

        return to_route('comics.show', $new_comic);
    }
}
