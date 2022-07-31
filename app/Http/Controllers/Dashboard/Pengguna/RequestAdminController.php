<?php

namespace App\Http\Controllers\Dashboard\Pengguna;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\RequestAdmin;
use App\Video;

use Mytuta, Mail, Auth;
use Session, Redirect;
use DB;


class RequestAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $req_admin = RequestAdmin::all();
  $req_admin = $this->RequestVideoJoin();
        return view('dashboard.pengguna.req-admin.index', compact('req_admin'));
    }

     public function RequestVideoJoin()
  {
            return DB::table('request_admins')
            ->leftJoin('videos', 'request_admins.video_id', '=', 'videos.id')
            ->get();// joining the posts table , where user_id and posts_user_id are same
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $videos = Video::all();
      $videos = [''=>'--Pilih Video--'] + Video::orderBy('name', 'asc')->pluck('name', 'id')->all();
        return view('dashboard.pengguna.req-admin.create', compact('videos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request_admin = new RequestAdmin;
      $request_admin->user_id = Auth::user()->id;
      $request_admin->notes = $request->notes;
      $request_admin->video_id = $request->video_id;

      // process upload berkas
     
      $request_admin->save();

     

      Session::flash('message', 'request anda telah terkirim, terima kasih!');
      return Redirect::to('dashboard/pengguna/req-admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
