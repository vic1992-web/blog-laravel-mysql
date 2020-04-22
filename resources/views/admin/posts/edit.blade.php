@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row ">
    <div class="col-md-8 col-md-offset-2 shadow">
      <div class="panel panel-default ">
        <div class="panel-heading  ">        
            Editar Entrada
          </div>      
              <div class="panel-body">          
                <form class="bg-white py-3 px-4 shadow rounded"
                  method="POST" action="{{route('posts.update', $post->id)}}" files="true">                     
                  {{ method_field('PUT') }} 
                  <div class="form-group">
                    <label  for="category_id">Categorias </label>
                    <select name="category_id" class="form-control">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>   
                      @endforeach  
                    </select>
                    </div>    
                    @include('admin.posts.partials.form' , ['btnText' =>'Editar'])
                  </form>
              </div>
          </div>       
    </div>
  </div>
</div>
    
@endsection