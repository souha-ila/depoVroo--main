<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;
class CarController extends Controller
{

public function index()
{
$viewData = [];
$viewData["cars"] = Car::all();
return view('car.index')->with("viewData", $viewData);
}
//
public function homecar()
{
    $viewData = [];
    $viewData["cars"] = Car::query()->take(4)->get();
    return view('welcome')->with("viewData", $viewData);
}

//show id
public function show($id)
{
$viewData = [];
$car = Car::findOrFail($id);
$viewData["cars"] = $car;
return view('car.show')->with("viewData", $viewData);
}

}
