@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row ">
    <div class="col-md-8 col-md-offset-2 shadow">
      <div class="panel panel-default ">
        <div class="panel-heading  ">         
            Crear etiquetas         
          </div>      
              <div class="panel-body">              
                <form class="bg-white py-3 px-4 shadow rounded"
                    method="POST" action="{{route('tags.store')}}"> 
                      @include('admin.tags.partials.form', ['btnText' =>'Guadar'])                    
                    </form>
              </div>
          </div>       
    </div>
  </div>
</div>
    
@endsection