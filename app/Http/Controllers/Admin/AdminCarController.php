<?php
namespace App\Http\Controllers\Admin;
use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class AdminCarController extends Controller
{

public function index()
{
$viewData = [];
$viewData["cars"] = Car::all();
return view('admin.car.index')->with("viewData", $viewData);
}
//--------------add new car-------------------

public function store(Request $request)
{
$request->validate([
"name" => "required|max:255",
"description" => "required",
"price" => "required|numeric|gt:0",
'image' => 'image',
]);
$newCar = new Car();
$newCar->setName($request->input('name'));
$newCar->setDescription($request->input('description'));
$newCar->setModel($request->input('model'));
$newCar->setPrice($request->input('price'));

$newCar->setImage("1.jpg");
$newCar->save();

if ($request->hasFile('image')) {
$imageName = $newCar->getId().".".$request->file('image')->extension();
Storage::disk('public')->put(
$imageName,
file_get_contents($request->file('image')->getRealPath())
);
$newCar->setImage($imageName);
$newCar->save();
}

return back();
}

public function delete($id)
{
Car::destroy($id);
return back();
}


public function edit($id)
{
$viewData = [];
$viewData["car"] = Car::findOrFail($id);
return view('admin.car.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"name" => "required|max:255",
"description" => "required",
"model" => "required",
"price" => "required|numeric|gt:0",
'image' => 'image',
]);
$car = Car::findOrFail($id);
$car->setName($request->input('name'));
$car->setDescription($request->input('description'));
$car->setModel($request->input('model'));
$car->setPrice($request->input('price'));
if ($request->hasFile('image')) {
$imageName = $car->getId().".".$request->file('image')->extension();
Storage::disk('public')->put(
$imageName,
file_get_contents($request->file('image')->getRealPath())
);
$car->setImage($imageName);
}
$car->save();
return redirect()->route('admin.car.index');
}

}