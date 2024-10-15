<?php

namespace App\Http\Controllers;

use App\Blotter;
use App\Officer;
use App\Resident;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($id)
    {
        $post = Resident::find($id);
        $cman = Officer::where('position', 'Chairman')->first();
        $sec = Officer::where('position', 'Secretary')->first();
        return view('Forms.BarangayClearance', compact('post', 'cman', 'sec'));
    }

    public function fileToAction($id)
    {
        $post = Blotter::find($id);
        $cman = Officer::where('position', 'Chairman')->first();
        $sec = Officer::where('position', 'Secretary')->first();
        $pdf = PDF::loadView('Forms.FiletoAction', compact('post', 'cman', 'sec'));
        return $pdf->stream();
    }
}
