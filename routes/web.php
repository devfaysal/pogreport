<?php

use App\Models\Region;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $zone = Zone::first();
    $region = $zone->regions->first();
    $product = $region->products->first();
    $region->products()->updateExistingPivot($product->id, ['budget' => 50000]);

    dd($region->products->first());
    return view('welcome');
});

Route::post('import', function(Request $request){
    // dd($request->file('csv'));
    $feed = $request->file('csv')->getPathName();
    $items = array_map('str_getcsv', file($feed));
    // dd($items);
    foreach($items as $key => $item){
        if($key === 0)continue;
        // Zone::create([
        //     'name' => $item[0],
        //     'phone' => $item[1],
        // ]);
        Region::create([
            'name' => $item[0],
            'zone_id' => $item[1],
            'phone' => $item[2],
        ]);
    }
})->name('import');