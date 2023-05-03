<?php

namespace App\Http\Controllers\Web\V1;

use App\Enums\PermissionEnums;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ControlPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth',
            'permission:'.PermissionEnums::CAN_VIEW_PAGE_CONTROL_PANEL->value
        ])->only(['index']);
    }

    public function index() : View
    {
        return view('dashboard.control-panel');
    }

}
