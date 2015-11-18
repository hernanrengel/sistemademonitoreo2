<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ini.inde');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subuno()
    {
        //
        return view('ini.sub-uno');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subdos()
    {
        //
        return view('ini.sub-dos');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subtres()
    {
        //
        return view('ini.sub-tres');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ssunouno()
    {
        //
        return view('ini.s-uno-1');
    }
    public function ssunodos()
    {
        //
        return view('ini.s-uno-2');
    }
    public function ssunotres()
    {
        //
        return view('ini.s-uno-3');
    }
    public function ssunocuatro()
    {
        //
        return view('ini.s-uno-4');
    }
    public function ssunocinco()
    {
        //
        return view('ini.s-uno-5');
    }
    public function ssunoseis()
    {
        //
        return view('ini.s-uno-6');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ssdosuno()
    {
        //
        return view('ini.s-dos-1');
    }
    public function ssdosdos()
    {
        //
        return view('ini.s-dos-2');
    }
    public function ssdostres()
    {
        //
        return view('ini.s-dos-3');
    }
    public function ssdoscuatro()
    {
        //
        return view('ini.s-dos-4');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sstresuno()
    {
        //
        return view('ini.s-tres-1');
    }
    public function sstresdos()
    {
        //
        return view('ini.s-tres-2');
    }
    public function sstrestres()
    {
        //
        return view('ini.s-tres-3');
    }
    //geoportal
     public function geo()
    {
        //
        return view('ini.geoportal');
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
