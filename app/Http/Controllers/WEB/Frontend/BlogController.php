<?php

namespace App\Http\Controllers\WEB\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->where('status', 1)->latest()->paginate(3);
        $categories = BlogCategory::with('blogs')->where("status", 1)->get();

        // return $categories;
        return view(
            'newFrontend.pages.blogs',
            [
                'blogs' => $blogs,
                'categories' => $categories,
            ]
        );
    }

    public function blogDetails($slug, $id){
        $blog = Blog::with('category', 'comments')->where('slug', $slug)->where('id', $id)->first();
        // return $blog;
        // die();
        return view('newFrontend.pages.blog-details', compact('blog'));
    }

    public function commentStore(Request $request)
    {
        try {
            $blogId = $request->input('blog_id');
            $name = $request->input('name');
            $email = $request->input('email');
            $commment = $request->input('comment');

            BlogComment::create([
                'blog_id' => $blogId,
                'name' => $name,
                'email' => $email,
                'comment' => $commment
            ]);

            return response()->json([
                'status' => "success",
                'message' => 'Comment submited successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => "failed",
                'message' => 'Something went wrong',
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
