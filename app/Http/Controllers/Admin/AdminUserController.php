<?php
namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class AdminUserController extends Controller
{

public function index()
{
$viewData = [];
$viewData["users"] = User::all();
return view('admin.user.users')->with("viewData", $viewData);
}


public function delete($id)
{
User::destroy($id);
return back();
}

}