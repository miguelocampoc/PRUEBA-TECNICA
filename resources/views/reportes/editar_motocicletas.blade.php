@extends('admin.layout')
@section('content')
<div id="app">
@verbatim
{{formato.pl}}

@endverbatim

</div>
@section('js')
<script>
var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    formato:Array,
  },
  methods:{

   
  },
  created:function(){
      var id= <?php echo $id?>;
    axios.get('/reportes/get_reporte_id/'+id).then(response =>{
      this.formato=response.data;
     });
  },
   
})
 

</script>

@endsection
@endsection
