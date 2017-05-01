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
 
 <form  enctype="multipart/form-data" method="POST" action="/admin/graph/{{$id}}/add" id="formid" class="" style="width: 50%;
    margin-left: 25%;">
                         
                        {!! csrf_field() !!}

                        <div class="form-group">
                          <label>Mobile ID </label>
                           <input  name="data[id]" type="" class="form-control" placeholder="price" value="{{$id}}" required disabled>
                        </div>
                        
                        <div class="form-group">
                          <label>Date </label>
                         <input  name="data[date]" type="date" class="form-control" placeholder="price" required>
                        </div> 
                        <div class="form-group">
                          <label>Price </label>
                          <input  name="data[price]" type="" class="form-control" placeholder="price" required>
                        </div>
                        
                     
                       
                        <button type="submit">Submit</button>
                        </form>
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
