<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Facturacion;
use Barryvdh\DomPDF\Facade as PDF;

class FacturacionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $facturacion= Facturacion::all();

        return view('facturacion.index')->with('facturacion',$facturacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PDF()
    {
        $facturacion= Facturacion::all();

     
        $pdf = PDF::loadView('PDF.reporte', compact('facturacion'));        
        return $pdf->stream('PDF.reporte');

    }

         
    public function create()
    {
        return view('facturacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facturacion = new Facturacion();
        $facturacion->Nombre_Cliente = $request->get('Nombre_Cliente');
        $facturacion->Nombre_Producto = $request->get('Nombre_Producto');
        $facturacion->Precio = $request->get('Precio');
        $facturacion->Fecha = $request->get('Fecha');
        $facturacion->save();


       /* return back()->with([
            'success' => sprintf('La factura "%s" fue creada con éxito.', $facturacion->mmm)
        ]);
        */
       return redirect('/facturacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facturacion = Facturacion::find($id);
         return view('facturacion.edit')->with('facturacion',$facturacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $facturacion = Facturacion::find($id);
        $facturacion->Nombre_Cliente = $request->get('Nombre_Cliente');
        $facturacion->Nombre_Producto = $request->get('Nombre_Producto');
        $facturacion->Precio = $request->get('Precio');
        $facturacion->Fecha = $request->get('Fecha');
        $facturacion->save();

        return redirect('/facturacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facturacion = Facturacion::find($id);        
        $facturacion->delete();

        return redirect('/facturacion');
    }
}
