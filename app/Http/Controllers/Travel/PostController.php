<?php

namespace App\Http\Controllers\Travel;

use App\Post;
use App\Country;
use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Storage;
use Session;


class PostController extends Controller
{
    /**
     * The fillable fields;
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'country_id',
        'user_id'
    ];

    public function __contruct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        $posts = Post::latest()->get();

        return view('posts.index')->withPosts($posts)->withActivities($activities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $activities = Activity::all();

        return view('posts.create')->withCountries($countries)->withActivities($activities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new post using the request data
        // Save it to the database
        $this->validate($request, array(
            'title' => 'required',
            'body' => 'required',
            'country_id' => 'required|integer',
            'image' => 'image'

        ));

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'country_id' => request('country_id'),
            'user_id' => auth()->id(),

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $post->image = $filename;
        }

        $post->save();

        $post->activities()->sync($request->activities, false);


        // And then redirect to somewhere in  application
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        $activities = Activity::all();

        $countries = Country::all();
        $ctry = array();

        foreach ($countries as $country) {
            $ctry[$country->id] = $country->countryname;
        }


        $activity2 = array();
        foreach ($activities as $activity) {
            $activity2[$activity->id] = $activity->activity_name;
        }

        return view('posts.edit')->withPost($post)->withCountries($ctry)->withActivities($activity2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->id();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $oldimage = $post->image;

            $post->image = $filename;

            Storage::delete($oldimage);
        }

        $post->save();

        if (isset($request->activities)) {
            $post->activities()->sync($request->activities);
        } else {
            $post->activities()->sync(array());
        }
        $request->session()->flash('success', 'This trip has been modified.');

        return redirect()->route('posts.show', $post->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);

        if (!is_null($post->activities)) {
            $post->activities()->detach();
        }

        Storage::delete($post->image);

        $post->delete();

        $request->session()->flash('success', 'Your trip has been removed.');

        return redirect()->route('posts.index');
    }

    public function activities()
    {
        return $this->belongsToMany('App\Activity')->using('App\activityPost');
    }
}
