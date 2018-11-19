<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evento;
use DB;
use Storage;
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventos = Evento::all();
        return view('mostrarevento', ['eventos' =>$eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('evento');
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

        $nombre_evento = $request->input('nombre_evento') ;
        $descripcion_evento = $request->input('descripcion_evento') ;
        $fecha = $request->input('fecha') ; 

        $imagen = $request->file('imagen') ;
         $file_route=time().'_'.$imagen->getClientOriginalName();
         Storage::disk('img_productos')->put ($file_route,file_get_contents($imagen->getRealPath()));
        DB::insert('insert into evento (nombre_evento,descripcion_evento,fecha,imagen) values(?,?,?,?) ',[$nombre_evento,$descripcion_evento,$fecha,$file_route]);
        return redirect('/mostrarevento')->with('info', 'Evento agregado');
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
        $evento=Evento::where('idevento',$id)->first();
        return view('edit_evento',['evento'=>$evento]);
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
            'nombre_evento' => 'required',
            'descripcion_evento' => 'required',
            'fecha' => 'required',
            
            
          
        ]);
        $data = array(
            'nombre_evento' => $request->input('nombre_evento'),
            'descripcion_evento' => $request->input('descripcion_evento'),
             'fecha' => $request->input('fecha')
            
        );
        
        Evento::where('idevento',$id)->update($data);      
        return redirect('/mostrarevento')->with('info', 'Datos fueron actualizados');
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
        Evento::where('idevento', $id)->delete();        
        return redirect('/mostrarevento')->with('info', 'Evento eliminado');
    }
}
