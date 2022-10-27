<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use Illuminate\Http\Request; //

class PostController extends Controller
{

    public function index(){
        return Post::paginate();
        //return DB::table('Posts')->select("title");
    }

    public function show($id){
        $Post = Post::find($id);
        if(!$Post){
            return response() -> json(["message" => "failed"], 404);
        }
        return $Post;
    }

    public function store(Request $request){
        $Post = new Post;
        $r = $Post -> fill($request -> all()) -> save();
        if(!$r){
            return response() -> json(["message" => "failed"], 404);
        }
        return $Post;
    }

    public function update(Request $request, $id){
        $Post = Post::find($id);
        if(!$Post){
            return response() -> json(["message" => "failed"], 404);
        }
        $r = $Post -> fill($request -> all()) -> save();
        if(!$r){
            return response() -> json(["message" => "failed"], 404);
        }
        return $Post;
    }

    public function destroy($id){
        $Post = Post::find($id);
        if(!$Post){
            return response() -> json(["message" => "failed"], 404);
        }
        $Post -> delete();
        return response() -> json(["message" => "success"], 404);
    }

}