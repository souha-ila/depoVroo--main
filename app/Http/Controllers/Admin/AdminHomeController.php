<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminHomeController extends Controller
{
public function index()
{
$viewData = [];

return view('admin.index')->with("viewData", $viewData);
}
public function index1()
{
$viewData = [];

return view('admin.home')->with("viewData", $viewData);
}
}