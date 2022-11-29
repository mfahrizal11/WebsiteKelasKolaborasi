<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $post = Post::all();
            return view ('/dashboard.posts')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-images');

        $validatedData = $request->validate(
            [
                'title' => 'required|max:255',
                'slug' => 'required|unique:posts',
                'image' => 'image',
                'body' => 'required'
            ]);

            if($request->file('image')){
                $validatedData['image'] = $request->file('image')->store('post-images');
            }

            $validatedData['user_id'] = auth()->user()->id;
            $validatedData['excerpt'] = Str::limit(strip_tags ($request-> body), 150);

            Post::create($validatedData);

            return redirect ('/dashboard/posts')-> with('success', 'Postingan baru berhasil dibuat');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::find($post->id);
        return view ('/dashboard.showpost')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('/dashboard.edit',[
        'post' => $post
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
                'title' => 'required|max:255',
                'image' => 'image',
                'body' => 'required',
            ];

            if($request->slug != $post->slug){
                $rules['slug'] = 'required|unique:posts';
            }

            $validatedData = $request->validate($rules);

            if($request->file('image')){
                if($request->oldImge){
                    Storage::delete($request->oldImage);
                }
                $validatedData['image'] = $request->file('image')->store('post-images');
            }

            //  $validatedData['user_id'] = auth()->user(id);
             $validatedData['excerpt'] = Str::limit(strip_tags ($request-> body), 150);

             Post::where('id', $post->id)
             ->update($validatedData);
             return redirect ('/dashboard/posts')-> with('success', 'Postingan berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post-image){
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect ('/dashboard/posts')-> with('success', 'Postingan berhasil dihapus');
}

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
