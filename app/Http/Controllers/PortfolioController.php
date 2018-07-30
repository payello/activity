<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio');
    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/download/PeterAyello-WrightCV.pdf";
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'PeterAyello-WrightCV.pdf', $headers);
    }
}
