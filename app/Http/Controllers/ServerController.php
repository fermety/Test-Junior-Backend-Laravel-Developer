<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Server;
use Illuminate\Support\Facades\DB;

class ServerController extends Controller
{
    public function index() {

        $user = DB::table('users')->join('servers', 'user.id', '=', 'servers.user_id')
        ->where('servers.id', '=', '3')->get();

        $active_servers = DB::table('servers')->where('action', '=', 'true')->get();

        $servers = DB::table('servers')->orderBy('created_ad', 'desc')->get();
    }
}
