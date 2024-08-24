<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {
    $blogs = Blog::with('comments')->get();
    return response()->json($blogs);
  }

  public function show(int $id)
  {
    $blog = $this->findBlogWithId($id);

    if (!$blog) {
      return response()->json(['message' => 'Not found'], 404);
    }
    return response()->json($blog);
  }

  public function store(Request $req)
  {
    request()->validate([
      'title' => ['required', 'min:3'],
      'body' => ['required']
    ]);

    Blog::create([
      'title' => $req->title,
      'body' => $req->body,
    ]);

    return response()->json(null, 201);
  }

  public function update(Request $update, int $id)
  {

    $blog = $this->findBlogWithId($id);

    if (!$blog) {
      return response()->json(['message' => 'Not found'], 404);
    }
    request()->validate([
      'title' => ['required', 'min:3'],
      'body' => ['required']
    ]);

    $blog->update([
      'title' => $update->title,
      'body' => $update->body,
    ]);

    return response()->json(200);
  }

  public function delete(int $id)
  {

    $blog = $this->findBlogWithId($id);

    if (!$blog) {
      return response()->json(['message' => 'Not found'], 404);
    }

    $blog->delete();

    return response()->json(['message' => 'Blog deleted successfully'], 200);
  }

  private function findBlogWithId(int $id)
  {
    return Blog::with('comments')->find($id);
  }
}
