<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('table');
    }

    /**
     * Process data and update the dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request)
    // {
    //     // Proses data dari form atau lakukan tindakan lainnya
        
    //     return redirect()->route('dashboard')->with('success', 'Data updated successfully!');
    // }
}