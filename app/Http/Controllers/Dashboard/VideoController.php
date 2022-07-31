<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Video;
use Redirect, Session, Mytuta;
use App\Http\Requests\VideoRequest;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $videos = Video::all();
      return view('dashboard.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $videos = Video::all();
        return view('dashboard.videos.create', compact('videos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request)
    {
        $video = new Video;
        $video->name = $request->name;
        $video->url = $request->url;
       
       
        $video->save();
        Session::flash('message', 'Menambah Video sukses!');
        return Redirect::to('dashboard/videos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $videos = Video::find($id);
      return view('dashboard.videos.edit', compact('videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VideoRequest $request, $id)
    {
      $video = Video::find($id);
      $video->name = $request->name;
      $video->url = $request->url;
     
      $video->save();
      Session::flash('message', 'Mengganti Video sukses!');
      return Redirect::to('dashboard/videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $video = Video::find($id);
      $video->delete();
      Session::flash('message', 'Menghapus Video Sukses!');
      return Redirect::to('dashboard/videos');
    }

    public function getData(Request $request)
    {
      $video = Video::find($request->id);
      return view('dashboard.videos.show', ['video' => $video]);
    }
}
