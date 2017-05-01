 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  
  <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/paper-bootstrap-wizard.css" rel="stylesheet" />
    <link href="/css/bootstrap-chosen.css" rel="stylesheet">
    <link href="/css/prism.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
   
  <link href="/css/jquery-ui.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
         <script src="/js/jquery-2.2.4.min.js" type="text/javascript"></script>
 


   
     

  <!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
  <link href="/css/themify-icons.css" rel="stylesheet">
   <link href="/css/sweetalert.css" rel="stylesheet">
 </head>
 <body>
 
 <form  enctype="multipart/form-data" method="POST" action="/dataupload" id="formid" class="" style="width: 50%;
    margin-left: 25%;">
                         
                        {!! csrf_field() !!}
<div class="form-group">
                          <label>Name </label>
                          <input  name="data[name]" type="" class="form-control" placeholder="name" required>
                        </div> 
                        <div class="form-group">
                          <label>Category </label>
                          <select  name="data[category]" type="" class="form-control" placeholder="category" required> 
                          <option value="mobile">Mobile</option></select>
                        </div>
                        
                        <div class="form-group">
                          <label>Description </label>
                          <textarea  name="data[description]" type="" class="form-control" placeholder="description" required></textarea>
                        </div> 
                        <div class="form-group">
                          <label>Price </label>
                          <input  name="data[price]" type="" class="form-control" placeholder="price" required>
                        </div>
                         <div class="form-group">
                          <label>Qunatity </label>
                          <input  name="data[quantity]" type="" class="form-control" placeholder="quantity" required>
                        </div>
                        <div class="form-group">
                          <label>Image </label>
                          <input  name="image" type="file" class="form-control" placeholder="image" required>
                        </div> 
                        <div class="form-group">
                          <label>Sub Category </label>
                          <select  name="data[subcategory]" type="" class="form-control" placeholder="Sub category" required>
                          <option></option>
                          <option value="motorola">Motorola</option>
                          <option value="google">Google</option>
                          <option value="lenovo">Lenovo</option>
                          <option value="song">Sony</option>
                          <option value="oneplus">OnePlus</option>
                          <option value="samsung">Samsung</option>
                          <option value="iphone">Iphone</option>

                          <option value="micromax">Micromax</option></select>
                        </div>
                        <div class="form-group">
                          <label>Sub Description </label>
                          <input  name="data[subdescription]" type="" class="form-control" placeholder="Sub Description" required>
                        </div> 
                          <div class="form-group">
                          <label>Feature Phone</label>
                          <select  name="data[feature]" type="" class="form-control" placeholder="Sub category" required>
                          <option></option>
                          <option value="YES">Yes</option>
                          <option value="NO">No</option></select></div>
                        <button type="submit">Submit</button>
                        </form>
                        <button><a href="/admin/home">Go Back</a></button>
 </body>
 @if(Session::has('message')) 
    <script>
 $(document).ready(function(){
        swal("{{ Session::get('message') }}");
    });
    </script>
@endif
     <script src="/js/state.js" type="text/javascript"></script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
{{--     <script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js"></script>
      --}}
  <script src="/js/bootstrap.min.js" type ="text/javascript"></script>
  <script src="/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
 {{-- <script src="/js/location.js"></script>  --}}
  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="/js/jquery.validate.min.js" type="text/javascript"></script>
<script src ="/js/chosen.jquery.js" type="text/javascript"></script>
  <!-- Sweet Alert 2 plugin -->
    <!-- Sweet Alert 2 plugin -->
    <script src="/assets/js/sweetalert2.js"></script>
 </html>
