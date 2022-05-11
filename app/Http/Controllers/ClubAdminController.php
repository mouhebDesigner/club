<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClubAdminController extends Controller
{
    public function index(Request $request)
    {
        $clubs = User::where('role', 'club')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.clubs.index', compact('clubs'));
    }
}
