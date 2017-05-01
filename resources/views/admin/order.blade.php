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

 <div class="container">

<table class="table">
    <thead>
      <tr>
      <th>Image</th>
                  <th>Product Name</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Quantity/Update</th>
          <th>Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($product as $row)
                <tr>
                  <td> <img width="60" src="/image/{{$row['imageid']}}" alt=""/></td>
                  <td>{{$row['productname']}}</td>
                   <td>{{$row['name']}}</td>
                    <td>{{$row['address']}}</td>
          <td>
          <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="1" disabled="">      </div>
          </td>
            
                
                  <td>{{$row['price']}}</td>
                 
                </tr>
      @endforeach
         </tbody>
  </table>
</tr>
<button><a href="/admin/home">Go Back</a></button>
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

  <script src="/js/bootstrap.min.js" type ="text/javascript"></script>
  <script src="/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="/js/jquery.validate.min.js" type="text/javascript"></script>
<script src ="/js/chosen.jquery.js" type="text/javascript"></script>
  <!-- Sweet Alert 2 plugin -->
 </html>
