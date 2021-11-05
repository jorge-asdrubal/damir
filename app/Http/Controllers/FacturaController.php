<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    

    public function index()
    {
        $facturas = Factura::all();
        return view("facturas.index", compact("facturas"));
    }

    public function view_create(){
        return view('facturas.create');
    }

    public function save(Request $request){
        $request->validate([
            'nombre_persona' => 'required|string|min:3|max:100',
            'celular' => 'min:6|max:12|unique:facturas,celular'
        ]);
        try {
            //$fechaFacturacion = Carbon::now()->toDateTimeString();
            Factura::create($request->all());
        } catch (Exception $e) {
            return redirect('/facturas')->withErrors('Ocurrio un error inesperado');
        }
        return redirect('/facturas')->with('success', 'Se registro la factura');
    }

}
