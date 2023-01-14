<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use Illuminate\Http\Request;

class ChuyenMucController extends Controller
{

    public function index()
    {
        return view('AdminRocker.page.Chuyen_Muc.index');
    }


    public function getData(Request $request)
    {
        dd($request->toArray());
        // return response()->json([
        //     'status' => true,
        // ]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(ChuyenMuc $chuyenMuc)
    {
        //
    }

    public function edit(ChuyenMuc $chuyenMuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChuyenMuc  $chuyenMuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChuyenMuc $chuyenMuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChuyenMuc  $chuyenMuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChuyenMuc $chuyenMuc)
    {
        //
    }
}
