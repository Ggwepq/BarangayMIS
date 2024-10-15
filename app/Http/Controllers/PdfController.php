<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Resident;
use App\Officer;
use App\Business;
use App\Blotter;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $post = Resident::find($id);
        $cman = Officer::where('position', 'Chairman')->first();
        $sec = Officer::where('position', 'Secretary')->first();
        $pdf = PDF::loadView('Forms.BarangayClearance', compact('post', 'cman', 'sec'));
        $pdf->SetPaper('letter', 'portrait');;
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function business($id)
    {
        $post = Business::find($id);
        $cman = Officer::where('position', 'Chairman')->first();
        $sec = Officer::where('position', 'Secretary')->first();
        $pdf = PDF::loadView('Forms.BusinessPermit', compact('post', 'cman', 'sec'));
        $pdf->SetPaper('letter', 'portrait');;
        return $pdf->stream();
    }

    public function indigency($id)
    {
        $post = Resident::find($id);
        $cman = Officer::where('position', 'Chairman')->first();
        $sec = Officer::where('position', 'Secretary')->first();
        $pdf = PDF::loadView('Forms.CertificateIndigency', compact('post', 'cman', 'sec'));
        $pdf->SetPaper('letter', 'portrait');;
        return $pdf->stream();
    }

    public function file($id)
    {
        $post = Blotter::find($id);
        $cman = Officer::where('position', 'Chairman')->first();
        $sec = Officer::where('position', 'Secretary')->first();
        $pdf = PDF::loadView('Forms.FiletoAction', compact('post', 'cman', 'sec'));
        $pdf->SetPaper('letter', 'portrait');
        return $pdf->stream();
    }
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
