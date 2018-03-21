<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use App\Emoji;

class EmojiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emojis = Emoji::all();

         return view('admin.emojis.index')->with(array(
             'emojis' => $emojis
         ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.emojis.create');
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
            'name' => 'required|max:191',
            'picture' => 'required|image'
          ]);

          $emoji = new Emoji();
          $emoji->name = $request->input('name');
          $emoji->picture = $request->input('picture');
          $emoji->save();

          $session = $request->session()->flash('message', 'Emoji added successfully!');

          return redirect()->route('admin.emojis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emoji = Emoji::findOrFail($id);

        return view('admin.emojis.show')->with(array(
            'emoji' => $emoji
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emoji = Emoji::findOrFail($id);

        return view('admin.emojis.edit')->with(array(
            'emoji' => $emoji
        ));
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
        $emoji = Emoji::findOrFail($id);

        $request->validate([
            'name' => 'required|max:191'
            'picture' => 'required|image'
        ]);

        $emoji->name = $request->input('name');
        $emoji->picture = $request->input('picture');
        $emoji->save();

        $session = $request->session()->flash('message', 'Emoji added successfully!');

        return redirect()->route('admin.emojis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emoji = Emoji::findOrFail($id);
        $emoji->delete();

        Session::flash('message', 'Emoji deleted successfully');

        return redirect()->route('admin.emojis.index');
    }
}
