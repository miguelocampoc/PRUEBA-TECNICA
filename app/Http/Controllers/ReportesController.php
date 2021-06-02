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
    public function editar_arnes(){
        return view('reportes.editar_arnes');
    }
    public function editar_escaleras($id){
        $formatos = formatos::findOrFail($id);
        return view('reportes.editar_escaleras',[
            'id'=>$id
        ]);
    }
    public function listar_motocicletas(){
        return view('reportes.listar_motocicletas',['listar_motocicletas'=>'active']);
    }
    public function listar_escaleras(){
        return view('reportes.listar_escaleras',['listar_escaleras'=>'active']);
    }
    public function listar_arnes(){
        return view('reportes.listar_arnes',['listar_arnes'=>'active']);
    }
    
    
    public function create_reporte_arnes(Request $request)
    {
        $attributes=[
            'n_serie_arnes'=>$request->n_serie_arnes,
            'n_serie_eslinga'=>$request->n_serie_eslinga,
            'n_eslinga'=>$request->n_eslinga,
            'argolla_d_pectoral'=>$request->argolla_d_pectoral,
            'argolla_d_dorsal'=>$request->argolla_d_dorsal,
            'argolla_d_lateral'=>$request->argolla_d_lateral,
            'soporte_dorsal_central'=>$request->soporte_dorsal_central,
            'eslabones_ajuste_pectoral'=>$request->eslabones_ajuste_pectoral,
            'eslabones_ajuste_pelvico'=>$request->eslabones_ajuste_pelvico,
            'eslabones_ajuste_muslos'=>$request->eslabones_ajuste_muslos,
            'silla_trasera'=>$request->silla_trasera,
            'costuras_general'=>$request->costuras_general,
            'criterio_aceptacion'=>$request->criterio_aceptacion,
            'cuerpo_eslinga'=>$request->cuerpo_eslinga,
            'ganchos_dobles'=>$request->ganchos_dobles,
            'absorbente_choque'=>$request->absorbente_choque,
            'costuras_general2'=>$request->costuras_general2,
            'criterio_aceptacion2'=>$request->criterio_aceptacion2,
            'cuerpo_eslinga2'=>$request->cuerpo_eslinga2,
            'ganchos_dobles2'=>$request->ganchos_dobles2,
            'costuras_general3'=>$request->costuras_general3,
            'criterio_aceptacion3'=>$request->criterio_aceptacion3,
            'cuerpo_adaptador'=>$request->cuerpo_adaptador,
            'argollas'=>$request->argollas,
            'costuras_general4'=>$request->costuras_general4,
            'criterio_aceptacion4'=>$request->criterio_aceptacion4,
            'argolla_superior'=>$request->argolla_superior,
            'tambor'=>$request->tambor,
            'gancho_inferior'=>$request->gacho_inferior,
            'costuras_general5'=>$request->costuras_general5,
            'criterio_aceptacion5'=>$request->criterio_aceptacion5,

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
            '1'=>$request->trabajo,
            '2'=>$request->tipo_escalera,
            '3'=>$request->fecha,
            '4'=>$request->largueros,
            '5'=>$request->peldaños,
            '6'=>$request->union_peldaños,
            '7'=>$request->zapatas,
            '8'=>$request->piezas_ajuste,
            '9'=>$request->aseo_escalera,
            '10'=>$request->identificacion,
            '11'=>$request->señalizacion,
            '12'=>$request->brazos_antiapertura,
            '13'=>$request->ganchos_trabapeldaños,
            '14'=>$request->guias_externas_union,
            '15'=>$request->obervaciones,
            '16'=>$request->conclusion,
            '17'=>$request->justificacion,
            
            

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
            '1'=>$request->trabajo,
            '2'=>$request->tipo_escalera,
            '3'=>$request->fecha,
            '4'=>$request->largueros,
            '5'=>$request->peldaños,
            '6'=>$request->union_peldaños,
            '7'=>$request->zapatas,
            '8'=>$request->piezas_ajuste,
            '9'=>$request->aseo_escalera,
            '10'=>$request->identificacion,
            '11'=>$request->señalizacion,
            '12'=>$request->brazos_antiapertura,
            '13'=>$request->ganchos_trabapeldaños,
            '14'=>$request->guias_externas_union,
            '15'=>$request->obervaciones,
            '16'=>$request->conclusion,
            '17'=>$request->justificacion,
            
            

        ];
            $escaleras= formatos::find($id);
            $escaleras->id_user=Auth::user()->id;
            $escaleras->categoria='arnes';
            $escaleras->attributes=json_encode($attributes,True);
            $escaleras->save();
    }
    
    public function update_reporte_arnes(Request $request, $id)
    {
        $attributes=[
            'n_serie_arnes'=>$request->n_serie_arnes,
            'n_serie_eslinga'=>$request->n_serie_eslinga,
            'n_eslinga'=>$request->n_eslinga,
            'argolla_d_pectoral'=>$request->argolla_d_pectoral,
            'argolla_d_dorsal'=>$request->argolla_d_dorsal,
            'argolla_d_lateral'=>$request->argolla_d_lateral,
            'soporte_dorsal_central'=>$request->soporte_dorsal_central,
            'eslabones_ajuste_pectoral'=>$request->eslabones_ajuste_pectoral,
            'eslabones_ajuste_pelvico'=>$request->eslabones_ajuste_pelvico,
            'eslabones_ajuste_muslos'=>$request->eslabones_ajuste_muslos,
            'silla_trasera'=>$request->silla_trasera,
            'costuras_general'=>$request->costuras_general,
            'criterio_aceptacion'=>$request->criterio_aceptacion,
            'cuerpo_eslinga'=>$request->cuerpo_eslinga,
            'ganchos_dobles'=>$request->ganchos_dobles,
            'absorbente_choque'=>$request->absorbente_choque,
            'costuras_general2'=>$request->costuras_general2,
            'criterio_aceptacion2'=>$request->criterio_aceptacion2,
            'cuerpo_eslinga2'=>$request->cuerpo_eslinga2,
            'ganchos_dobles2'=>$request->ganchos_dobles2,
            'costuras_general2'=>$request->costuras_general2,
            'criterio_aceptacion3'=>$request->criterio_aceptacion3,
            'cuerpo_adaptador'=>$request->cuerpo_adaptador,
            'argollas'=>$request->argollas,
            'costuras_general3'=>$request->costuras_general3,
            'criterio_aceptacion4'=>$request->criterio_aceptacion4,
            'argolla_superior'=>$request->argolla_superior,
            'tambor'=>$request->tambor,
            'gancho_inferior'=>$request->gacho_inferior,
            'costuras_general4'=>$request->costuras_general4,
            'criterio_aceptacion5'=>$request->criterio_aceptacion5,

        ];
        $arnes= formatos::find($id);
        $arnes->id_user=Auth::user()->id;
        $arnes->categoria='arnes';
        $arnes->attributes=json_encode($attributes,True);
        $arnes->save();
    }
    public function update(Request $request, $id)
    {
       
    }
   
    public function destroy($id)
    {
        
    }
}
