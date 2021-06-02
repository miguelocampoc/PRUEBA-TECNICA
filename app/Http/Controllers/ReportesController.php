<?php

namespace App\Http\Controllers;
use App\formatos;
use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\json_encode;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('tecnico');
    }
   
    public function crear_motocicletas(){
        
        return view('reportes.crear_motocicletas',['crear_motocicletas'=>'active']);
    }
    public function crear_arnes(){
        return view('reportes.crear_arnes',['crear_arnes'=>'active']);
    }
    public function crear_escaleras(){
        return view('reportes.crear_escaleras',['crear_escaleras'=>'active']);
    }
    public function editar_motocicletas($id){
        $formatos = formatos::findOrFail($id);
        
        return view('reportes.editar_motocicletas',[
            'listar_motocicletas'=>'active',
             'id'=>$id
           
        ]);
    } public function get_reporte_motocicleta_id($id){
        $formatos = formatos::findOrFail($id);
         echo $formatos->attributes;
       
    }
    public function editar_arnesyaparejos($id){
        $formatos = formatos::findOrFail($id);
        return view('reportes.editar_arnes',
        [
            'listar_arnes'=>'active',
             'id'=>$id
        
        ]

       );
    }
    public function editar_escaleras($id){
        $formatos = formatos::findOrFail($id);
        return view('reportes.editar_escaleras',[
            'listar_escaleras'=>'active',
            'id'=>$id
        ]);
    }
    public function listar_motocicletas(){
        return view('reportes.listar_motocicletas',
        ['listar_motocicletas'=>'active',
          'formatos'=>formatos::select('users.name','users.apellido','formatos.created_at','formatos.updated_at','formatos.id')
          ->join('users','users.id','=','formatos.id_user')
          ->where('categoria','=','motocicletas')->get()
        ]
        );
    }
    public function listar_escaleras(){
        return view('reportes.listar_escaleras',
        ['listar_escaleras'=>'active',
        'formatos'=>formatos::select('users.name','users.apellido','formatos.created_at','formatos.updated_at','formatos.id')
        ->join('users','users.id','=','formatos.id_user')
        ->where('categoria','=','escaleras')->get()
        ]
    );
    }
    public function listar_arnes(){
        return view('reportes.listar_arnes',
        ['listar_arnes'=>'active',
        'formatos'=>formatos::select('users.name','users.apellido','formatos.created_at','formatos.updated_at','formatos.id')
        ->join('users','users.id','=','formatos.id_user')
        ->where('categoria','=','arnes')->get()
        
        ]
    );
    }
    
    
    public function create_reporte_arnes(Request $request)
    {
        $attributes=[
            'as'=>$request->n_serie_arnes,
            'ea'=>$request->n_serie_eslinga,
            'na'=>$request->n_eslinga,
            'ap'=>$request->argolla_d_pectora,
            'ad'=>$request->argolla_d_dorsal,
            'al'=>$request->argolla_d_lateral,
            'sc'=>$request->soporte_dorsal_central,
            'ep'=>$request->eslabones_ajuste_pectoral,
            'eap'=>$request->eslabones_ajuste_pelvico,
            'eas'=>$request->eslabones_ajuste_muslos,
            'st'=>$request->silla_trasera,
            'cg'=>$request->costuras_general,
            'ca'=>$request->criterio_aceptacion,
            'ce'=>$request->cuerpo_eslinga,
            'gd'=>$request->ganchos_dobles,
            'ac'=>$request->absorbente_choque,
            'cg2'=>$request->costuras_general2,
            'ca2'=>$request->criterio_aceptacion2,
            'ce2'=>$request->cuerpo_eslinga2,
            'gd2'=>$request->ganchos_dobles2,
            'cg3'=>$request->costuras_general3,
            'ca3'=>$request->criterio_aceptacion3,
            'cad'=>$request->cuerpo_adaptador,
            'ass'=>$request->argollas,
            'cg4'=>$request->costuras_general4,
            'ca4'=>$request->criterio_aceptacion4,
            'ar'=>$request->argolla_superior,
            'tr'=>$request->tambor,
            'gr'=>$request->gacho_inferior,
            'cg5'=>$request->costuras_general5,
            'ca5'=>$request->criterio_aceptacion5,

        ];
         
        formatos::create([
            'id_user'=>Auth::user()->id,
            'categoria'=> 'arnes',
            'attributes'=> json_encode($attributes, True)
            
            ]);
            return redirect('/reportes/crear_arnes')->with('status', 'Reporte creado exitosamente!');
         
    }
    
    public function create_reporte_escaleras(Request $request){
        $attributes=[
            'tb'=>$request->trabajo,
            'ti'=>$request->tipo_escalera,
            'fe'=>$request->fecha,
            'la'=>$request->largueros,
            'pe'=>$request->peldaños,
            'up'=>$request->union_peldaños,
            'za'=>$request->zapatas,
            'pa'=>$request->piezas_ajuste,
            'ae'=>$request->aseo_escalera,
            'id'=>$request->identificacion,
            'se'=>$request->señalizacion,
            'ba'=>$request->brazos_antiapertura,
            'ga'=>$request->ganchos_trabapeldaños,
            'geu'=>$request->guias_externas_union,
            'obs'=>$request->observaciones,
            'con'=>$request->conclusion,
            'jus'=>$request->justificacion,     

        ];

        formatos::create([
            'id_user'=>Auth::user()->id,
            'categoria'=> 'escaleras',
            'attributes'=> json_encode($attributes, True)
         
            ]);
            return redirect('/reportes/crear_escaleras')->with('status', 'Reporte creado exitosamente!');
        }
    public function show($id)
    {
       
    }
    public function create(){
        
    }
  
    public function edit($id)
    {
        return view('reportes.edit');

    }
    public function create_reporte_motocicletas(Request $request){
        $attributes=[
            'pl'=>$request->placa,
            'mr'=>$request->marca,
            'md'=>$request->modelo,
            'co'=>$request->conductor,
            'lc'=>$request->licencia_transito,
            'rv'=>$request->revision_tecnico,
            'fv'=>$request->fecha_vigente,
            'sv'=>$request->soat_vigente,
            'ki'=>$request->km_inicial,
            'kf'=>$request->km_final,
            'kt'=>$request->km_total,
            'in'=>$request->inspeccionado,
            'ca'=>$request->cargo,
            'fe'=>$request->fecha,
            'er'=>$request->estado_ruedas,
            'ba'=>$request->bateria,
            'lu'=>$request->luces,
            'es'=>$request->espejos,
            'ec'=>$request->estado_cadena,
            'fd'=>$request->freno_delanteto,
            'ft'=>$request->freno_trasero,
            'bo'=>$request->bocina,
            'li'=>$request->limpieza,
            'vo'=>$request->vehiculo_organizado,
            'de'=>$request->desinfeccion,
            'ca'=>$request->capacitacion,
            'con'=>$request->consumo_bebidas,
            'ts'=>$request->trabajador_salud,
            'lr'=>$request->labrado_ruedas,
            'cac'=>$request->cambio_aceite,
            'cf'=>$request->cambio_filtro,
            'em'=>$request->embrague,
            'ka'=>$request->kit_arrastre,
            'cfu'=>$request->control_fugas,
            'amr'=>$request->amortiguadores,
            'exo'=>$request->exosto,
            'ccc'=>$request->casco_chaleco_conductor,
            'caj'=>$request->caja_herramientas,
            'obs'=>$request->observaciones,
            

        ];

        formatos::create([
            'id_user'=>Auth::user()->id,
            'categoria'=> 'motocicletas',
            'attributes'=> json_encode($attributes, True)
            
            ]);
            return redirect('/reportes/crear_motocicletas')->with('status', 'Reporte creado exitosamente!');
    }
    
    public function update_reporte_motocicletas(Request $request, $id)
    {
        $attributes=[
            'pl'=>$request->placa,
            'mr'=>$request->marca,
            'md'=>$request->modelo,
            'co'=>$request->conductor,
            'lc'=>$request->licencia_transito,
            'rv'=>$request->revision_tecnico,
            'fv'=>$request->fecha_vigente,
            'sv'=>$request->soat_vigente,
            'ki'=>$request->km_inicial,
            'kf'=>$request->km_final,
            'kt'=>$request->km_total,
            'in'=>$request->inspeccionado,
            'ca'=>$request->cargo,
            'fe'=>$request->fecha,
            'er'=>$request->estado_ruedas,
            'ba'=>$request->bateria,
            'lu'=>$request->luces,
            'es'=>$request->espejos,
            'ec'=>$request->estado_cadena,
            'fd'=>$request->freno_delanteto,
            'ft'=>$request->freno_trasero,
            'bo'=>$request->bocina,
            'li'=>$request->limpieza,
            'vo'=>$request->vehiculo_organizado,
            'de'=>$request->desinfeccion,
            'ca'=>$request->capacitacion,
            'con'=>$request->consumo_bebidas,
            'ts'=>$request->trabajador_salud,
            'lr'=>$request->labrado_ruedas,
            'cac'=>$request->cambio_aceite,
            'cf'=>$request->cambio_filtro,
            'em'=>$request->embrague,
            'ka'=>$request->kit_arrastre,
            'cfu'=>$request->control_fugas,
            'amr'=>$request->amortiguadores,
            'exo'=>$request->exosto,
            'ccc'=>$request->casco_chaleco_conductor,
            'caj'=>$request->caja_herramientas,
            'obs'=>$request->observaciones,
        ];
       
        $motocicleta = formatos::find($id);
        $motocicleta->id_user=Auth::user()->id;
        $motocicleta->categoria='motocicletas';
        $motocicleta->attributes=json_encode($attributes, True);
        $motocicleta->save();
        return redirect('/reportes/editar/motocicletas/'.$id)->with('status', 'Reporte creado exitosamente!');
    }

    public function update_reporte_escaleras(Request $request, $id)
    {
        $attributes=[
            'tb'=>$request->trabajo,
            'ti'=>$request->tipo_escalera,
            'fe'=>$request->fecha,
            'la'=>$request->largueros,
            'pe'=>$request->peldaños,
            'up'=>$request->union_peldaños,
            'za'=>$request->zapatas,
            'pa'=>$request->piezas_ajuste,
            'ae'=>$request->aseo_escalera,
            'id'=>$request->identificacion,
            'se'=>$request->señalizacion,
            'ba'=>$request->brazos_antiapertura,
            'ga'=>$request->ganchos_trabapeldaños,
            'geu'=>$request->guias_externas_union,
            'obs'=>$request->observaciones,
            'con'=>$request->conclusion,
            'jus'=>$request->justificacion,    
            
            

        ];
            $escaleras= formatos::find($id);
            $escaleras->id_user=Auth::user()->id;
            $escaleras->categoria='escaleras';
            $escaleras->attributes=json_encode($attributes,True);
            $escaleras->save();
            return redirect('/reportes/editar/escaleras/'.$id)->with('status', 'Reporte creado exitosamente!');
    }
    
    public function update_reporte_arnes(Request $request, $id)
    {
        $attributes=[
            'as'=>$request->n_serie_arnes,
            'ea'=>$request->n_serie_eslinga,
            'na'=>$request->n_eslinga,
            'ap'=>$request->argolla_d_pectora,
            'ad'=>$request->argolla_d_dorsal,
            'al'=>$request->argolla_d_lateral,
            'sc'=>$request->soporte_dorsal_central,
            'ep'=>$request->eslabones_ajuste_pectoral,
            'eap'=>$request->eslabones_ajuste_pelvico,
            'eas'=>$request->eslabones_ajuste_muslos,
            'st'=>$request->silla_trasera,
            'cg'=>$request->costuras_general,
            'ca'=>$request->criterio_aceptacion,
            'ce'=>$request->cuerpo_eslinga,
            'gd'=>$request->ganchos_dobles,
            'ac'=>$request->absorbente_choque,
            'cg2'=>$request->costuras_general2,
            'ca2'=>$request->criterio_aceptacion2,
            'ce2'=>$request->cuerpo_eslinga2,
            'gd2'=>$request->ganchos_dobles2,
            'cg3'=>$request->costuras_general3,
            'ca3'=>$request->criterio_aceptacion3,
            'cad'=>$request->cuerpo_adaptador,
            'ass'=>$request->argollas,
            'cg4'=>$request->costuras_general4,
            'ca4'=>$request->criterio_aceptacion4,
            'ar'=>$request->argolla_superior,
            'tr'=>$request->tambor,
            'gr'=>$request->gacho_inferior,
            'cg5'=>$request->costuras_general5,
            'ca5'=>$request->criterio_aceptacion5,

        ];
        $arnes= formatos::find($id);
        $arnes->id_user=Auth::user()->id;
        $arnes->categoria='arnes';
        $arnes->attributes=json_encode($attributes,True);
        $arnes->save();
        return redirect('/reportes/editar/arnesyaparejo/'.$id)->with('status', 'Reporte creado exitosamente!');
    }
    public function update(Request $request, $id)
    {
       
    }
   
    public function destroy($id)
    {
        
    }
}
