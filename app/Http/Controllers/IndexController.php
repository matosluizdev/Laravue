<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        // Definindo novo nome pra cidade do registro com id 4
        // $listing = Listing::find(4);
        // $listing->city = 'Guararapes';
        // $listing->save();

        //Criando um novo registro
        // $listing = new Listing();
        // $listing->beds = 10;
        // $listing->baths = 10;
        // $listing->area = 50;
        // $listing->city = 'Araçatuba';
        // $listing->code = 274676;
        // $listing->street = 'Antonio dos santos ribeiro';
        // $listing->street_number = 160;
        // $listing->price = 100_00;

        // $listing->save();

        // Criar com mass assignment
        // Listing::create([
        //     'beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'Valparaiso', 'street' => 'Tinker st', 'street_number' => 20, 'code' => 'TS', 'price' => 200_000
        // ]);

       return inertia('Index/Index',
       [
        'message' => 'Hello World!'
       ]
    );

    }

    public function show() {
        return inertia('Index/Show');
    }
}
