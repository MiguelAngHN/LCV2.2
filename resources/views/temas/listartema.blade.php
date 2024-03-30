@extends('layouts.app')

@section('title','listar seccion')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              <th>Nombre del tema</th>
              <th>Descripción</th>
              <th>Url de Imagen</th>
              <th>Id seccion</th>
              <th>Id multimedia</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($temas  as $tema)
              <tr>
                <td>{{$tema->nombre_tema}}</td>
                <td>{{$tema->descripcion}}</td>
                <td>{{$tema->url_imagen}}</td>
                <td>{{$tema->seccion_id}}</td>
                <td>{{$tema->multimedia_id}}</td>
                  
                  
                  <td><a href="{{route('tema.show',$tema->id)}}">Detalle</a></td>
                 <td>
                    <form method="post" action="{{route('tema.destroy',$tema->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                 </td>
             
                 
                 
                  {{-- <td><a href="{{route('curso.destroy',$curso->id)}}">Eliminar</a></td> --}}
                  
    
              </tr>
          @endforeach
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Id Pqrsd</th>
                <th>esAnomina</th>
                <th>TipoPQRSD</th>
                <th>Estado</th>
                <th>Creada</th>
                <th>Responder</th>
                <th>Detalle</th>
            </tr>
        </tfoot> -->
    </table>
    
    </div>
    











@endsection

@section('js')


<script type="text/javascript">

   $(document).ready(function() {
    // $('#idPqrsd').DataTable();
  
    // Enable DataTables: https://datatables.net/examples/basic_init/
    try {
      if ($.fn.dataTable.isDataTable("#idPqrsd")) {
        $("#idPqrsd").DataTable()
      } else {
        $("#idPqrsd").DataTable({
          language: {
            url:
              "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json",
          },
        })
      }
    } catch (error) {
      console.log(
        "Unable to add Filters to a table from this page - " + error.name
      )
    }


} );
</script>

@endsection
