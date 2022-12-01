<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Panel\PanelRepo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware(['access.control'])->only(['index']);
    }

    public function index(PanelRepo $panelRepo): Factory|View|Application
    {
        return view('panel.index', compact(['panelRepo']));
    }

    public function admintoHome(): Factory|View|Application
    {
        return view('adminto.index');
    }
}
