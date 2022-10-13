<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

//use App\Models\Topic;

class TopicController extends Controller
{

    public function index()
    {
        //return Topic::paginate();
        return DB::table('topics')->select("title");
    }

}