<?php

namespace App\Http\Controllers;

use App\Beetle;
use Illuminate\Http\Request;

/*
列表顯示
品種(兜、鍬)、(成蟲、幼蟲)、耗材更換、孵化、羽化、蟄伏、飼養溫度、距離上次更換耗材時間
明細顯示
品種(兜、鍬)、(成蟲、幼蟲)、耗材更換、孵化、羽化、蟄伏、飼養溫度
耗材更換、幼蟲克重(列表顯示)
按鈕新增紀錄
*/
class BeetleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $beetle = Beetle::all();
        return view('beetle.index')->with('beetle', $beetle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('beetle.create');
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
        $input = $request->all();
        Beetle::create($input);
        return redirect('beetle')->with('flash_message', '新增成功!');
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
        $beetle = Beetle::find($id);
        return view('beetle.show')->with('beetle', $beetle);
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
        $beetle = Beetle::find($id);
        return view('beetle.edit')->with('beetle', $beetle);
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
        $beetle = Beetle::find($id);
        $input = $request->all();
        $beetle->update($input);
        return redirect('beetle')->with('flash_message', '已更新!');
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
        Beetle::destroy($id);
        return redirect('beetle')->with('flash_message', '已刪除!');
    }
}
