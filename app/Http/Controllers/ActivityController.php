<?php

namespace App\Http\Controllers;


use App\Activity;
use Session;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $fillable = [
        'activity_name'
      ];

    public function __construct(){
      $this->middleware('auth')->except('activity');
    }

    public function activity($id)
    {
      $activity = Activity::find($id);

      return view('activities.activity')->withActivity($activity);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index')->withActivities($activities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('activity_name'=>'required|max:255'));
        $activity = new Activity;

        $activity->activity_name = $request->activity_name;
        $activity->save();

        Session::flash('success', 'New activity was created');

        return redirect()->route('activities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::find($id);

        return view('activities.show')->withActivity($activity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::find($id);

        return view('activities.edit')->withActivity($activity);
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
        $activity = Activity::find($id);

        $this->validate($request, ['activity_name'=>'required']);

        $activity->activity_name = $request->activity_name;

        $activity->save();

        Session::flash('success', 'The activity has been modified.');

        return redirect()->route('activities.show', $activity->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);

        $activity->posts()->detach();

        $activity->delete();

        Session::flash('success', 'The activity has been deleted');

        return redirect()->route('activities.index');


    }
}
