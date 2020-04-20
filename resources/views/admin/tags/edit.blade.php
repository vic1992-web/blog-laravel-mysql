@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row ">
    <div class="col-md-8 col-md-offset-2 shadow">
      <div class="panel panel-default ">
        <div class="panel-heading  ">        
            Editar etiquetas
          </div>      
              <div class="panel-body">          
                <form class="bg-white py-3 px-4 shadow rounded"
                  method="POST" action="{{route('tags.update', $tag->id)}}">
                  <h1>Editar proyecto</h1>    
                  {{ method_field('PUT') }}     
                    @include('admin.tags.partials.form' , ['btnText' =>'Editar'])
                  </form>
              </div>
          </div>       
    </div>
  </div>
</div>
    
@endsection