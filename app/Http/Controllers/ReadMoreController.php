<?php

namespace App\Http\Controllers;

class ReadMoreController extends Controller
{
    /**
     * Returns the read more activity view.
     *
     * @return \Illuminate\View\View
     */
    public function activity()
    {
        return view('read-more/activity');
    }

    /**
     * Returns the read more currency view.
     *
     * @return \Illuminate\View\View
     */
    public function currency()
    {
        return view('read-more/currency');
    }

    /**
     * Returns the read more suggestions view.
     *
     * @return \Illuminate\View\View
     */
    public function suggestions()
    {
        return view('read-more/suggestions');
    }

    /**
     * Returns the read more born to be view.
     *
     * @return \Illuminate\View\View
     */
    public function bornToBe()
    {
        return view('read-more/born-to-be');
    }

    /**
     * Returns the read more the good cards view.
     *
     * @return \Illuminate\View\View
     */
    public function tgc()
    {
        return view('read-more/tgc');
    }
}
