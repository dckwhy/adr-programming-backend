<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserInfoResource;
use App\Models\UserInfo;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user_info = UserInfo::create([
            'country' => $request->country,
            'province' => $request->province,
            'city' => $request->city,
            'date_accessed' => $request->date_accessed,
            'time_accessed' => $request->time_accessed,
            'user_device' => $request->user_device,
            'user_browser' => $request->user_browser,
            'user_os' => $request->user_os,
            'user_ip' => $request->user_ip,
            'user_screen_res' => $request->user_screen_res,
            'user_type' => $request->user_type,
        ]);

        return $this->success('user_info', new UserInfoResource($user_info), 'Created successfully', 200);
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
