
{{csrf_field()}}
<div class="form-group">
  <label  for="name">Nombre de la etiqueta </label>
    <input class="form-control"
     type="text" name="name" id="name" value="{{old('name', $category->name)}}">
  
  </div>

 <div class="form-group">
  <label  for="slug">URL Amigable </label>
    <input class="form-control"
     type="text" name="slug" id="slug" value="{{old('slug', $category->slug)}}">  
  </div>
  <div class="form-group">
    <label  for="slug">Descripción</label>
    <textarea name="body" class="form-control" >{{ $category->body}}</textarea>       
    </div>
  <div class="form-group"> 
  <button class="btn btn-primary btn-sm">{{$btnText}}</button>
 </div>

 @section('script')
 <script src="./bower_components/jquery/dist/jquery.min.js"></script>
 <script src="./bower_components/speakingurl/dist/speakingurl.min.js"></script>
 <script src="./bower_components/jquery.stringtoslug/dist/jquery.stringtoslug.min.js"></script>


 <script>
$(document).ready( function() {  
  $("#name").keyup(function(){
    var Text = $(this).val();
    Text = Text.toLowerCase();
    Text = Text.replace(/ /g,'-').replace(/[^\w-]+/g,'');   
    $("#slug").val(Text);    
});
 
});

 </script>
     
 @endsection