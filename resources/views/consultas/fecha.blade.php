@extends('admin.layout')
@section('content')
<div id="app" class="container">
@verbatim
<br>
<h3>Consulta por fecha</h3>
    <div class="row">
        <div class="col-md-4">
        <p>Escriba la fecha para realizar la consulta</p>
        <input id="fecha" type="date" class="form-control">
        </div>
    </div><br>
    <button class="btn btn-primary" @click="btnconsult()" type="button">Consultar</button><br><br>
    <table style="display:none" id="table_id" class="table table-striped table-bordered" style="width:100%">
<thead>
  <th>Tipo</th>
  <th>Placa</th>
  <th>Producto que carga o descarga</th>


</thead>
<tbody v-for="consulta of consulta" >

  <td>{{consulta.tipo}}</td>
  <td>{{consulta.placa}}</td>
  <td>{{consulta.pcd}}</td>

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
      var consult="/consultar/fecha";
      var fecha= $('#fecha').val();
      axios.post(consult,{"fecha":fecha}).then(response =>{
            this.consulta=response.data;
            if(this.consulta.length!=0){
              console.log(this.consulta);
               $("#table_id").show();
                }
            else{
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
    }
   }
});


</script>
@endsection

@endsection
