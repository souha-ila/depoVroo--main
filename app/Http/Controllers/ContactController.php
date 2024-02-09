<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{

public function contact()
{
return view('autres.contact');
}
public function services()
{
return view('autres.services');
} 
public function about()
{
return view('autres.about');
}
}
