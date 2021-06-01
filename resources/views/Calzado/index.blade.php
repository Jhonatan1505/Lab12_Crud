@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Calzados</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('calzado.create') }}" class="btn 
btn-info" >Añadir Calzado</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred 
table-striped">
             <thead>
               <th>Calzado</th>
               <th>Tipo</th>
               <th>Color</th>
               <th>Talla</th>
               <th>Marca</th>
               <th>Genero</th>
               <th>Edades</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($calzados->count())  
              @foreach($calzados as $calzado)  
              <tr>
                <td>{{$calzado->calzado}}</td>
                <td>{{$calzado->tipo}}</td>
                <td>{{$calzado->color}}</td>
                <td>{{$calzado->talla}}</td>
                <td>{{$calzado->marca}}</td>
                <td>{{$calzado->genero}}</td>
                <td>{{$calzado->edades}}</td>
                <td><a class="btn btn-primary btn-xs"
href="{{action('CalzadoController@edit', $calzado->id)}}" ><span 
class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('CalzadoController@destroy', $calzado->id)}}"method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
                   
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon 
       glyphicon-trash"></span></button>
                 </td>
                </tr>
                @endforeach 
                @else
                <tr>
                 <td colspan="8">No hay registro !!</td>
                </tr>
                @endif
             </tbody>

            </table> 
            </div>
           </div>
           {{ $calzados->links() }}
      </div>
    </div>
  </section>
@endsection