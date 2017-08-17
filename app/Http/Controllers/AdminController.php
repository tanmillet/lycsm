<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class AdminController
 * User: Terry Lucas
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    //
    /**
     * @author: Terry Lucas
     * AdminController constructor.
     */
    public function __construct()
    {
    }

    /**
     * User: Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.baset');
    }

    /**
     * User: Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lqk()
    {
        return view('admin.lqf');
    }

    /**
     * User: Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cqk()
    {
        return view('admin.cqf');
    }

    /**
     * User: Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lhk()
    {
        return view('admin.lhk');
    }

    /**
     * User: Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function chk()
    {
        return view('admin.chk');
    }

    /**
     * User: Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lh()
    {
        return view('admin.lh');
    }
}
