
{{csrf_field()}}
<input type="hidden" name="user_id" value="{{old('user_id',auth()->user()->id)}}">

<div class="form-group">
  <label  for="name">Nombre de la etiqueta </label>
    <input class="form-control"
     type="text" name="name" id="name" value="{{old('name', $post->name)}}">
  
  </div>

 <div class="form-group">
  <label  for="slug">URL Amigable </label>
    <input class="form-control"
     type="text" name="slug" id="slug" value="{{old('slug', $post->slug)}}">  
  </div>

  <div class="form-group">
    <label  for="file">Imagen </label>
      <input class="form-control"
       type="file" name="file">  
    </div>

    <div class="form-group">
      <label  for="status">Estados</label>
      <label >
        <input class="form-check-input " type="radio" name="status"  value="PUBLISHED">
        Publicado
      </label>    
      <label >
        <input class="form-check-input" type="radio" name="status"  value="DRAFT">
        Borrador
      </label>      
      </div>

     
      <div class="form-group">
        <label for="tags">Etiquetas</label>
        @foreach ($tags as $tag)
        <label>
        <input class="form-check-input" type="checkbox" name="tags[]" value="{{old('tags[]', $tag->id)}}">
          {{$tag->name}}         
        </label>            
        @endforeach
      </div>

      <div class="form-group">
        <label for="excerpt">Extracto</label>
        <textarea name="excerpt" class="form-control" >{{ $post->excerpt}}</textarea> 
      </div>
  <div class="form-group">
    <label  for="body">Descripción</label>
    <textarea name="body" rows="6" class="form-control" >{{ $post->body}}</textarea>       
  </div>


  <div class="form-group"> 
  <button class="btn btn-primary btn-sm">{{$btnText}}</button>
 </div>

 @section('script')
 <script src="./bower_components/jquery/dist/jquery.min.js"></script>
 <script src="./bower_components/speakingurl/dist/speakingurl.min.js"></script>
 <script src="./bower_components/jquery.stringtoslug/dist/jquery.stringtoslug.min.js"></script>
 <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>


 <script>
$(document).ready( function() {  
  $("#name").keyup(function(){
    var Text = $(this).val();
    Text = Text.toLowerCase();
    Text = Text.replace(/ /g,'-').replace(/[^\w-]+/g,'');   
    $("#slug").val(Text);    
});
 
});

CKEDITOR.config.height = 400;
CKEDITOR.config.width = 'auto';

CKEDITOR.replace('body');

 </script>
     
 @endsection