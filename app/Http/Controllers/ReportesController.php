<?php

namespace App\Http\Controllers;
use App\formatos;
use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;

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
    public function editar_motocicletas(){
        return view('reportes.editar_motocicletas');
    }
    public function editar_arnes(){
        return view('reportes.editar_arnes');
    }
    public function editar_escaleras(){
        return view('reportes.editar_esclaeras');
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
        formatos::create([
            'id_user'=>Auth::user()->id,
            'categoria'=> 'arnesyaparejos',
            'attributes'=>json_decode($attributes),
            
            ]);
            return redirect('/reportes/crear_arnes')->with('status', 'creado exitosamente!');
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

    
    public function update_reporte_motocicletas(Request $request, $id)
    {
        $attributes=[
            'placa'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'conductor'=>$request->condcutor,
            'licencia_transito'=>$request->licencia_transito,
            'Revision_tecnico'=>$request->Revision_tecnico,
            'fecha_vidente'=>$request->fecha_vigente,
            'soat_vigente'=>$request->soat_vigente,
            'km_inical'=>$request->km_inicial,
            'km_final'=>$request->km_final,
            'km_total'=>$request->km_total,
            'inspeccionado'=>$request->inspeccionado,
            'cargo'=>$request->cargo,
            'fecha'=>$request->fecha,
            'estado_ruedas'=>$request->estado_ruedas,
            'bateria'=>$request->bateria,
            'luces'=>$request->luces,
            'espejos'=>$request->espejos,
            'estado_cadena'=>$request->estado_cadena,
            'freno_delantero'=>$request->freno_delanteto,
            'freno_trasero'=>$request->freno_trasero,
            'bocina'=>$request->bocina,
            'limpieza'=>$request->limieza,
            'vehiculo_organizado'=>$request->vehiculo_organizado,
            'desinfeccion'=>$request->desinfeccion,
            'capacitacion'=>$request->capacitacion,
            'consumo_bebidas'=>$request->consumo_bebidas,
            'trabajador_salud'=>$request->trabajador_salud,
            'labrado_ruedas'=>$request->labrado_ruedas,
            'cambio_aceite'=>$request->cambio_aceite,
            'cambio_filtro'=>$request->cambio_filtro,
            'embrague'=>$request->embrague,
            'kit_arrastre'=>$request->kit_arrastre,
            'control_fugas'=>$request->control_fugas,
            'amortiguadores'=>$request->amortiguadores,
            'exosto'=>$request->exosto,
            'casco_chaleco_conductor'=>$request->casco_chaleco_conductor,
            'caja_herramientas'=>$request->caja_herramientas,
            'observaciones'=>$request->observaciones,
            

        ];
       
        $motocicleta = formatos::find($id);
        $motocicleta->id_user=Auth::user()->id;
        $motocicleta->categoria='motocicletas';
        $motocicleta->attributes=json_decode($attributes);
        $motocicleta->save();
    }

    public function update_reporte_escaleras(Request $request, $id)
    {
       
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
        $arnes->attributes=json_decode($attributes);
        $arnes->save();
    }
    public function update(Request $request, $id)
    {
       
    }
   
    public function destroy($id)
    {
        
    }
}
