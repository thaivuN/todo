<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $stories = Story::orderBy('created_at', 'DESC')->paginate(10);
        return view('home.index', [
            'stories' => $stories,
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:50',
            'post' => 'required|max:255',
        ]);

        $request->user()->stories()->create([
            'title' => $request->title,
            'post' => $request->post,
        ]);

        return redirect('/');
    }

    public function destroy(Request $request, $storyId) {
        $story = Story::find($storyId);
        if ($request->user()->id === $story->user_id)
            $story->delete();

        return redirect('/');
    }

}
