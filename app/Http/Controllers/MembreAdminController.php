<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MembreAdminController extends Controller
{
    public function index(Request $request)
    {
        $membres = User::where('role', 'membre')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.membres.index', compact('membres'));
    }
}
