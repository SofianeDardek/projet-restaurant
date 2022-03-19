<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index(Log $log)
    {
        $logs = $log->all();
        
        return view('admin.logs', [
            'logs' => $logs
        ]);
    }
}
