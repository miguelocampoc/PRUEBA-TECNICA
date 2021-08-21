@extends('admin.layout')
@section('content')
<div id="app" class="container pl-3">
@verbatim
<br>
<h3>Consulta por placa</h3>
    <div class="row">
        <div class="col-md-4">
        <p>Escriba la placa para realizar la consulta</p>
        <input id="placa" type="text" class="form-control">
        </div>
    </div><br>
    <button class="btn btn-primary" @click="btnconsult()" type="button">Consultar</button><br><br>
    <table style="display:none" id="table_id" class="table table-striped table-bordered" style="width:100%">
<thead>
  <th>placa</th>
  <th>color</th>
  <th>marca</th>
  <th>tipo de vehiculo</th>
  <th>Detalles</th>


</thead>
<tbody v-for="consulta of consulta" >

  <td>{{consulta.placa}}</td>
  <td>{{consulta.color}}</td>
  <td>{{consulta.marca}}</td>
  <td>{{consulta.tipo_vehiculo}}</td>

  <td><button type="button" @click="detalles(consulta.id)" class="btn btn-primary">Detalles</a></td>

</tbody>
</table>
@endverbatim
</div>

@section('js')
<script>
var app = new Vue({
  el: '#app',
  data: {
    consulta:[],
  },
  methods:{
    btnconsult:function(){
      var consult="/consultar/placa";
      var placa= $('#placa').val();
      axios.post(consult,{"placa":placa}).then(response =>{
            this.consulta=response.data;
            if(this.consulta.length!=0){
              console.log(this.consulta);
               $("#table_id").show();
                }
            else {
              $("#table_id").hide();
               this.danger();
               }

        });
    },
    danger:function(){
        Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'No se encontraron resultados',
            showConfirmButton: false,
            timer: 1500
            });
    },
    detalles:function(id){
     location.href="/ver/vehiculo/"+id+"/detalles";
    }
   }
});


</script>
@endsection

@endsection
