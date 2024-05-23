<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class PhoneController extends Controller{
    public function index($id){
        if (Auth::user()->role === 'guest') {
            return abort(403, 'No puedes acceder a este contenido');
        }

        $phone = Phone::findOrFail($id);
        return view('phone', ['phone' => $phone]);
    }

    public function transaction($id){
    $phone = Phone::findOrFail($id);
    $user = auth()->user();

    // Crear la compra
    $transaction = new Transaction();
    $transaction->user_id = $user->id;
    $transaction->phoneID = $phone->id;
    $transaction->description = "Transacción de compra, el usuario {$user->name} ha adquirido el telefono {$phone->model}";
    $transaction->purchase_amount = $phone->price;
    $transaction->save();

    return view('phoneTransaction', ['phone' => $phone , 'user' => $user]);
    }

    public function delete($id){
        $phone = Phone::findOrFail($id);

    }
    public function update($id){
        $phone = Phone::findOrFail($id);

    }
    public function create(){
        return view('addphone');
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required',
            'developer' => 'required',
            'release_date' => 'required',
            'os' => 'required',
            'imei' => 'required',
        ]);

        $phone = new Phone();
        $phone->model = $request->input('model');
        $phone->description = $request->input('description');
        $phone->price = $request->input('price');
        $phone->stock = $request->input('stock');
        $phone->image = $request->input('image');
        $phone->developer = $request->input('developer');
        $phone->release_date = $request->input('release_date');
        $phone->os = $request->input('os');
        $phone->imei = $request->input('imei');
        $phone->save();

        return redirect()->route('home')->with('success', 'Producto añadido exitosamente.');
    }

}
