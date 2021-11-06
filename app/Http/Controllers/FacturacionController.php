<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Facturacion;
use Barryvdh\DomPDF\Facade as PDF;

class FacturacionController extends Controller
{
    public function index(){
        $facturacion= Facturacion::all();
        return view('facturacion.index')->with('facturacion',$facturacion);
    }

    public function PDF()
    {
        $facturacion= Facturacion::all();
        $pdf = PDF::loadView('PDF.reporte', compact('facturacion'));        
        return $pdf->stream('PDF.reporte');
    }

    public function create(){
        return view('facturacion.create');
    }

    public function store(Request $request){
        $facturacion = new Facturacion();
        $facturacion->Nombre_Cliente = $request->get('Nombre_Cliente');
        $facturacion->Nombre_Producto = $request->get('Nombre_Producto');
        $facturacion->Precio = $request->get('Precio');
        $facturacion->Fecha = $request->get('Fecha');
        $facturacion->save();
        return redirect('/facturacion');
    }

    public function edit($id){
        $facturacion = Facturacion::find($id);
        return view('facturacion.edit')->with('facturacion',$facturacion);
    }

    public function update(Request $request, $id){
        $facturacion = Facturacion::find($id);
        $facturacion->Nombre_Cliente = $request->get('Nombre_Cliente');
        $facturacion->Nombre_Producto = $request->get('Nombre_Producto');
        $facturacion->Precio = $request->get('Precio');
        $facturacion->Fecha = $request->get('Fecha');
        $facturacion->save();
        return redirect('/facturacion');
    }

    public function destroy($id){
        $facturacion = Facturacion::find($id);        
        $facturacion->delete();
        return redirect('/facturacion');
    }

    public function PDF_UNICO($id_serie){
        $facturacion= Facturacion::find($id_serie);
        return PDF::loadView('PDF.reporte_unico', compact('facturacion'))
                    ->stream();
    }
}
