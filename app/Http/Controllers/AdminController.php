<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function adminDashboard(){
    	$id = Auth::user()->id;
    	$admin_info = User::find($id);
    	//dd($admin_info);
		return view('admin.index', compact('admin_info'));
	}

	public function adminLogout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
