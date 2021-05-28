<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
$('#table_id').DataTable(
  
  {
      "language": {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "No hay registros",
          "info": "Mostrando pagina _PAGE_ de _PAGES_",
          "infoEmpty": "No registros disponibles",
          "infoFiltered": "(filtrado de _MAX_ total de registros)",
          "search":         "Buscar:",
          "paginate": {
              "first":      "First",
              "last":       "Last",
              "next":       "Siguiente",
              "previous":   "Anterior"
         },
      },
    

  }

);

var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    usuarios:[],
   
  },
  methods:{
    usuarios_activos:function(){
      var url="/usuarios/listar_act";
      axios.get(url).then(response =>{
         this.usuarios=response.data;
         $('#type').text("Estas viendo solo usuarios activos");

        });
     },
     usuariosall:function(){
      var url="/usuarios/listar_all";
      axios.get(url).then(response =>{
        this.usuarios=response.data;
        $('#type').text("Estas viendo todos los usuarios");
        });
     },
     btneditar:function(id){
      console.log(id);
      location.href = "/usuarios/editar/"+id;
      },
      settings:function (id){
          $("#insert").modal({backdrop: "static"});
          $('#id_user').val(id);
          $('#insert').modal('show');        
    }
   
  },
  created:function(){
       this.usuarios_activos();
  },
  
   
})


</script>
