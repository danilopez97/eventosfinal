<?php

namespace App\Http\Controllers;
use App\Persona;
use App\Evento;
use DB;
use Storage;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $personas = Persona::all();
        return view('mostrarpersona', ['personas' =>$personas]);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $eventos = Evento::all();
         $personas=Persona::all();
         return view('persona',[
             'eventos' => $eventos,
             'personas' => $personas
             
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $nombre = $request->input('nombre') ;
         $edad = $request->input('edad') ;
         $telefono = $request->input('telefono') ; 

         $imagen = $request->file('imagen') ;
         $file_route=time().'_'.$imagen->getClientOriginalName();
         Storage::disk('img_productos')->put ($file_route,file_get_contents($imagen->getRealPath()));

         DB::insert('insert into persona (nombre,edad,telefono,imagen) values(?,?,?,?) ',[$nombre,$edad,$telefono,$file_route]);
         return redirect('/mostrarpersona')->with('info', 'Persona fue agregada');

       
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
        //
        $persona=Persona::where('idpersona',$id)->first();
        return view('edit_persona',['persona'=>$persona]);
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
        //
        

        $this->Validate($request, [
            'nombre' => 'required',
            'edad' => 'required',
            'telefono' => 'required',

            

        ]);
        $data = array(
            'nombre' => $request->input('nombre'),
            'edad' => $request->input('edad'),
            'telefono' => $request->input('telefono')
            

            
        );
        
        Persona::where('idpersona',$id)->update($data);      
        return redirect('/mostrarpersona')->with('info', 'Datos fueron actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        Persona::where('idpersona', $id)->delete();        
        return redirect('/mostrarpersona')->with('info', 'Persona eliminada');
    }
}
