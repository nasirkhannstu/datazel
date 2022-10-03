<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Contact;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    // public function index()
    // {
    //     $posts = Post::latest()->take(6)->published()->get();
    //     return view('datazel', compact('posts'));
    // }
    public function index()
    {
        return view('datazel');
    }
    public function contact(Request $request)
    {
        $email = $request->email;
        return view('pages.contact', compact('email'));
    }
    public function submitContactForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:2',
            'email' => 'required|email',
            'message' => 'required|string|max:1000|min:10',
        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success', 'Our team will contact you soon, Thank You.');
    }
    public function posts()
    {
        $posts = Post::latest()->published()->paginate(10);
        return view('posts', compact('posts'));
    }
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->published()->first();
        // $posts = Post::latest()->take(3)->published()->get();
        // Increase View count
        $postKey = 'post_'.$post->id;
        if(!Session::has($postKey)){
            $post->increment('view_count');
            Session::put($postKey, 1);
        }

        return view('post', compact('post'));
    }
    public function categories()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }
    public function categoryPost($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->published()->paginate(10);

        return view('categoryPost', compact('posts'));
    }
    public function search(Request $request)
    {
        $this->validate($request, ['search' => 'required|max:255']);
        $search = $request->search;
        $posts = Post::where('title', 'like', "%$search%")->paginate(10);
        $posts->appends(['search' => $search]);

        // $categories = Category::all();
        return view('search', compact('posts', 'search'));
    }
    public function tagPosts($name)
    {
        $query = $name;
        $tags = Tag::where('name', 'like', "%$name%")->paginate(10);
        $tags->appends(['search' => $name]);

        return view('tagPosts', compact('tags', 'query'));
    }
    public function likePost($post){
        // Check if user already liked the post or not
        $user = Auth::user();
        $likePost = $user->likedPosts()->where('post_id', $post)->count();
        if($likePost == 0){
            $user->likedPosts()->attach($post);
        } else{
            $user->likedPosts()->detach($post);
        }
        return redirect()->back();
    }
}
