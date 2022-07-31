<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\RequestAdmin;
use TutaComp, Redirect, DB;


class RequestAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      
      $req_admin = $this->RequestAdminJoin();
     // var_dump($req_admin);
      return view('dashboard.request-admin.index', compact('req_admin'));
    }


     public function RequestAdminJoin()
  {
    return DB::table('request_admins')
            ->leftJoin('users', 'request_admins.user_id', '=', 'users.id')
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $req_admin = RequestAdmin::find($id);
      return view('dashboard.request-admin.show', compact('req_admin'));
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
         DB::table('request_admins')
              ->where('id', $id)
              ->update(['acc' => 1]);
    }
/*
    public function acc($id)
    {
        //
        $request_admin = new RequestAdmin;
      
      $request_admin->acc = 1;

      // process upload berkas
     
      $request_admin->save();
    }
    */

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
