<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcion;
use App\Evento;
use App\Persona;
use DB;
class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personas = Persona::all();
        return view('personasinscritas', ['personas' =>$personas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$eventos=Evento::all();
         //return view('inscripcion',compact('eventos'));

         $eventos = Evento::all();
         $personas=Persona::all();
         return view('inscripcion',[
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
    

    public function store(Request $request,$id)
    {
        $idpersona = $request->input('idpersona');
 $checkbox=$_POST['checkbox'];
 foreach($checkbox as $llave =>$valor)
 {

     DB::insert('insert into inscripcion (persona_idpersona,evento_idevento) values(?,?) ',[$id,$valor]);
 
 }
 return redirect('/mostrarpersona')->with('info', 'Eventos Asignados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personas=Persona::where('idpersona',$id)->first();
        $eventos = Evento::all();
        return view('mostrarunapersona',[
            'eventos' => $eventos,
            'personas' => $personas
            
        ]);

        //$personas=Persona::where('idpersona',$id)->first();
        //return view('mostrarunapersona',['personas'=>$personas]);
    }

    public function listarinscripciones($id)
    {
        $inscripciones=DB::table('inscripcion')

->join('persona','persona.idpersona','=','inscripcion.persona_idpersona')
->join('evento','evento.idevento','=','inscripcion.evento_idevento')
//->select('idasignacion','curso.curso','asignacion.notacurso','estudiante.nombre_estudiante')
->select('evento.nombre_evento as evento','evento.imagen')
 //->select(DB::raw('count(*) as total_cursos, asignacion.estudiante_idestudiante'))
->where('inscripcion.persona_idpersona','=',$id)
 //->groupBy('inscripcion.idnscripcion')

->get();
//dd($inscripciones);
 return view('listarinscripciones')->with('inscripciones', $inscripciones);
 
    }


    public function delete($id)
    {
        //
        inscripcion::where('idinscripcion', $id)->delete();        
        return redirect('/inscripcion/cambiarasignacion')->with('info', 'Evento eliminado');
    }


    public function inscripciones()
    {
        $inscripciones=DB::table('inscripcion')

->join('persona','persona.idpersona','=','inscripcion.persona_idpersona')
->join('evento','evento.idevento','=','inscripcion.evento_idevento')
//->select('idasignacion','curso.curso','asignacion.notacurso','estudiante.nombre_estudiante')
->select('evento.nombre_evento as evento','persona.nombre as persona' ,'inscripcion.idinscripcion as idinscripcion')
 //->select(DB::raw('count(*) as total_cursos, asignacion.estudiante_idestudiante'))
//->where('inscripcion.persona_idpersona','=',$id)
 //->groupBy('inscripcion.idnscripcion')

->get();
//dd($inscripciones);
 return view('cambiarasignacion')->with('inscripciones', $inscripciones);
 
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {


        
        $inscripciones=DB::table('inscripcion')

->join('persona','persona.idpersona','=','inscripcion.persona_idpersona')
->join('evento','evento.idevento','=','inscripcion.evento_idevento')
//->select('idasignacion','curso.curso','asignacion.notacurso','estudiante.nombre_estudiante')
->select('evento.nombre_evento as evento','evento.idevento as idevento','inscripcion.idinscripcion as idinscripcion')
 //->select(DB::raw('count(*) as total_cursos, asignacion.estudiante_idestudiante'))
->where('inscripcion.persona_idpersona','=',$id)
 //->groupBy('inscripcion.idnscripcion')

->get();
$inscripcions = Inscripcion::all();
//dd($inscripciones);
 //return view('desasignar')->with('inscripciones', $inscripciones);
 
 
 return view('desasignar',[
     'inscripcions' => $inscripcions,
     'inscripciones' => $inscripciones
     
 ]);


    }

    public function pasar()
    {
        //
        //$eventos=Evento::all();
         //return view('inscripcion',compact('eventos'));

         $eventos = Evento::all();
         $personas=Persona::all();
         $inscripciones=Inscripcion::all();
         return view('desasignar',[
             'eventos' => $eventos,
             'personas' => $personas,
             'inscripciones' => $inscripciones
             
         ]);
    }



    public function desasignar(Request $request,$id)
    {
        $idpersona = $request->input('idpersona');
 $checkbox=$_POST['checkbox'];
 foreach($checkbox as $llave =>$valor)
 {

    Inscripcion::where('idpersona', $id)->delete();  
 }
 return redirect('/mostrarpersona')->with('info', 'Eventos Asignados');
    }
}
