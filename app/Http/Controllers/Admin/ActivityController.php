<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use App\Activity;

class ActivityController extends Controller
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
        $activities = Activity::all();

       return view('admin.activities.index')->with(array(
           'activities' => $activities
       ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activities.create');
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
           'title' => 'required|max:191',
           'description' => 'required|max:191',
           'short_descript' => 'required|max:191',
           'picture' => 'required|max:191',
           'tip_id' => 'required|integer|min:0',
           'level_id' => 'required|integer|min:0',
           'category_id' => 'required|integer|min:0',
           'rating_id' => 'required|integer|min:0',
           'emoji_id' => 'required|integer|min:0',
           // 'user_id' => 'required|integer|min:0'
       ]);

       $activity = new Activity();
       $activity->title = $request->input('title');
       $activity->description = $request->input('description');
       $activity->short_descript = $request->input('short_descript');
       $activity->picture = $request->input('picture');
       $activity->tip_id = $request->input('tip_id');
       $activity->level_id = $request->input('level_id');
       $activity->category_id = $request->input('category_id');
       $activity->rating_id = $request->input('rating_id');
       $activity->emoji_id = $request->input('emoji_id');
       // $activity->user_id = $request->input('user_id');
       $activity->save();

       $session = $request->session()->flash('message', 'Activity added successfully!');

       return redirect()->route('admin.activities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::findOrFail($id);

        return view('admin.activities.show')->with(array(
            'activity' => $activity
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
        $activity = Activity::findOrFail($id);

       return view("admin.activities.edit")->with(array(
           'activity' => $activity
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
        $activity = Activity::findOrFail($id);

        $request->validate([
            'title' => 'required|max:191',
            'description' => 'required|max:191',
            'short_descript' => 'required|max:191',
            'picture' => 'required|max:191',
            'tip_id' => 'required|integer|min:0',
            'level_id' => 'required|integer|min:0',
            'category_id' => 'required|integer|min:0',
            'rating_id' => 'required|integer|min:0',
            'emoji_id' => 'required|integer|min:0',
            // 'user_id' => 'required|integer|min:0'
        ]);

        $activity->title = $request->input('title');
        $activity->description = $request->input('description');
        $activity->short_descript = $request->input('short_descript');
        $activity->picture = $request->input('picture');
        $activity->tip_id = $request->input('tip_id');
        $activity->level_id = $request->input('level_id');
        $activity->category_id = $request->input('category_id');
        $activity->rating_id = $request->input('rating_id');
        $activity->emoji_id = $request->input('emoji_id');
        // $activity->user_id = $request->input('user_id');
        $activity->save();

        $session = $request->session()->flash('message', 'Activity updated successfully!');

        return redirect()->route('admin.activities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);

        $activity->delete();

        Session::flash('message', 'Activity deleted successfully!');

        return redirect()->route('admin.activity.index');
    }
}