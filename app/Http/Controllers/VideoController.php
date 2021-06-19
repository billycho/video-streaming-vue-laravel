<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    // all Videos
    public function index()
    {
        $videos = Video::all()->toArray();
        return array_reverse($videos);
    }
}