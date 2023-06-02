<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //! Validation of data -> StorePostRequest
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.index');

        //? (DEPRECATED) Data validation (make the application more stable)
        // $request->validate([
        //     'title' => 'required|min:5|max:100',
        //     'description' => 'required|min:15|max:1000',
        //     'thumb' => 'required|url|regex:/^https:.*/',
        //     'price' => 'required|numeric|min:0.01',
        //     'series' => 'required|min:8|max:30',
        //     'sale_date' => 'required|date',
        //     'type' => 'required|min:2|max:30',
        // ]);

        //? (DEPRECATED) Old method (without data validation) commented out
        // $comic->title = $request->title;
        // $comic->description = $request->description;
        // $comic->thumb = $request->thumb;
        // $comic->price = $request->price;
        // $comic->series = $request->series;
        // $comic->type = $request->type;
        // $comic->sale_date = $request->sale_date;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', ['comic' => $comic]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        //! Validation of data -> StorePostRequest
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', $comic->id);

        //? (DEPRECATED) Data validation (make the application more stable)
        // $request->validate([
        //     'title' => 'required|min:5|max:100',
        //     'description' => 'required|min:15|max:1000',
        //     'thumb' => 'required|url|regex:/^https:.*/',
        //     'price' => 'required|numeric|min:0.01',
        //     'series' => 'required|min:8|max:30',
        //     'sale_date' => 'required|date',
        //     'type' => 'required|min:2|max:30',
        // ]);

        //? (DEPRECATED) Old method (without data validation) commented out
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
