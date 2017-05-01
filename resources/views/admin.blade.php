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
 </head>
 <body>
<div class="modal fade" tabindex="-1" role="dialog" id="confirm-modal">
  <div class="modal-dialog confirm-dialog" role="document">
    <div class="modal-content confirm-content">
    <form  enctype="multipart/form-data" method="POST" action="/admin/deletedata">
                        {!! csrf_field() !!}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <input type="hidden" name="uniqueid" id="uniqueid">
        <h4 class="modal-title" id="">Are you sure you want to delete this file? </h4>
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-success left">Yes</button>
        <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <div class="container">
 <div><button><a href="/admin/upload">Upload New Item</a></button></div>
<table class="table">
    <thead>
      <tr>
        <th>Index</th>
        <th>Name</th>
        <th>Category</th>
        <th>Sub Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th style="width: 300px">Description</th>
        <th>Feature</th>
        <th>Action</th>
        <th>Graph Price</th>
      </tr>
    </thead>
    <tbody>
    @php

    for($i=0;$i<count($data);$i++)
    {$getdata=$data[$i];

    $getdata=$getdata['attributes'];
    
      echo "<tr>
       <td >".$getdata['id']."</td>
        <td>".$getdata['name']."</td>
         <td>".$getdata['category']."</td>
         <td>".$getdata['subcategory']."</td>
          <td>".$getdata['price']."</td> 
          <td>".$getdata['quantity']."</td>
           <td>".substr($getdata['description'],0,150)."...</td>
           <td>".$getdata['feature']."</td>
             <td><a class=\"btn btn-primary\" href=\"/admin/editproduct/".$getdata['id']."\" >Edit</a><button class=\"settings-url btn btn-primary\" data-toggle=\"modal\" data-target=\"#confirm-modal\" >DELETE</button><input type =\"hidden\" class=\"profile\"  value=".$getdata['id']."></td>
             <td><a href=\"/admin/graph/".$getdata['id']."/view\" class=\"btn btn-primary\"> Add Graph </a></td>
      </tr>";}
      @endphp   </tbody>
  </table>
</tr>
 </body>
 <script type="text/javascript">
   $('document').ready(function(){
$('.settings-url').click(function(){
console.log($(this).next().val());
$('#uniqueid').val($(this).next().val());
 // $('#confirm-modal').modal('show');
});
   });
</script>
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
 </html>
