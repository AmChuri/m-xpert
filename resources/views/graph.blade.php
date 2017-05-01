<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>m-xpert online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
  <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
  <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
  <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
  -->
  <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
  <script src="themes/js/less.js" type="text/javascript"></script> -->
  
<!-- Bootstrap style --> 
   <link href="/css/demo.css" rel="stylesheet" />
    <link id="callCss" rel="stylesheet" href="/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive --> 
  <link href="/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
  <link href="/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify --> 
  {{-- <link href="/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/> --}}
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/themes/images/ico/apple-touch-icon-57-precomposed.png">
     <link rel="stylesheet" href="/chartist.min.css">
  <style type="text/css" id="enject"></style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
  @if (Auth::guest())<div class="span6">Welcome!<strong> User</strong></div>
  @else<div class="span6">Welcome!<strong> {{ Auth::user()->name }}</strong></div>@endif
  <div class="span6">
  <div class="pull-right">
    
  </div>
  </div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="/"><img src="/themes/images/logo.png" alt="Bootsshop"/></a>
        <form class="form-inline navbar-search" method="get" action="/search">
        <input id="srchFld" name="search" class="typeahead srchTxt" type="text" />
        
          <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);

            });
        }
    });
</script>
    <ul id="topMenu" class="nav pull-right">

   <li class=""><a href="contact.html">Contact</a></li>
          @if (Auth::guest())
     <li> <a href="/register" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Sign Up</span></a></li>
     <li class="">
     <a href="/login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
  </li>
  @else
  <li> <a role="button" data-toggle="modal" style="padding-right:0" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <span class="btn btn-large btn-success"> Logout</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> </li>
                                        @endif
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
  <div class="container">
  <div class="row">
<!-- Sidebar ================================================== -->
  <div id="sidebar" class="span3">

     <ul id="sideManu" class="nav nav-tabs nav-stacked">
         <li class="subMenu open"><a> Mobiles</a>
                <ul>
                <li><a class="active" href="/product/mobiles/s/motorola"><i class="icon-chevron-right"></i>Motorola </a></li>
            <li><a class="active" href="/product/mobiles/s/google"><i class="icon-chevron-right"></i>Google </a></li>
            <li><a class="active" href="/product/mobiles/s/lenovo"><i class="icon-chevron-right"></i>Lenovo </a></li>
            <li><a class="active" href="/product/mobiles/s/sony"><i class="icon-chevron-right"></i>Sony </a></li>
            <li><a class="active" href="/product/mobiles/s/oneplus"><i class="icon-chevron-right"></i>OnePlus </a></li>
               <li><a class="active" href="/product/mobiles/s/iphone"><i class="icon-chevron-right"></i>IPhone </a></li>
              <li><a class="active" href="/product/mobiles/s/samsung"><i class="icon-chevron-right"></i>Samsung </a></li>
            <li><a class="active" href="/product/mobiles/s/micromax"><i class="icon-chevron-right"></i>Micromax </a></li>
            

                </ul>
            </li>
    
        
            
        </ul>
        <br/>
  
      <div class="thumbnail">
        <img src="/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
        <div class="caption">
          <h5>Payment Methods</h5>
        </div>
        </div>
  </div>
<!-- Sidebar end=============================================== -->
  <div class="span9">
  
  <div class="row">   
    
        <div class="charts-content">
            <div class="container-fluid">
          
                <div class="row">
                 

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header" style="
    margin-left: 20px;">
                                {{$data['name']}}
                                <p class="category">Last Seven days Price Graph</p>
                            </div>
                            <div class="content">
                                <div id="chartStock" class="ct-chart "></div>
                            </div>
                        </div>
                    </div>

                </div>
             
            

            </div>
        </div>

     <button class="btn btn-primary"><a href="/product/mobiles/v/{{$id}}">Go Back</a></button>  
  
  </div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
  <div  id="footerSection">
  <div class="container">
    <div class="row">
      <div class="span3">
        <h5>ACCOUNT</h5>
        <a href="login.html">YOUR ACCOUNT</a>
        <a href="login.html">PERSONAL INFORMATION</a> 
        <a href="login.html">ADDRESSES</a> 
        <a href="login.html">DISCOUNT</a>  
        <a href="login.html">ORDER HISTORY</a>
       </div>
      <div class="span3">
        <h5>INFORMATION</h5>
        <a href="contact.html">CONTACT</a>  
        <a href="register.html">REGISTRATION</a>  
        <a href="legal_notice.html">LEGAL NOTICE</a>  
        <a href="tac.html">TERMS AND CONDITIONS</a> 
        <a href="faq.html">FAQ</a>
       </div>
      <div class="span3">
        <h5>OUR OFFERS</h5>
        <a href="#">NEW PRODUCTS</a> 
        <a href="#">TOP SELLERS</a>  
        <a href="special_offer.html">SPECIAL OFFERS</a>  
        <a href="#">MANUFACTURERS</a> 
        <a href="#">SUPPLIERS</a> 
       </div>
      <div id="socialMedia" class="span3 pull-right">
        <h5>SOCIAL MEDIA </h5>
        <a href="#"><img width="60" height="60" src="/themes/images/facebook.png" title="facebook" alt="facebook"/></a>
        <a href="#"><img width="60" height="60" src="/themes/images/twitter.png" title="twitter" alt="twitter"/></a>
        <a href="#"><img width="60" height="60" src="/themes/images/youtube.png" title="youtube" alt="youtube"/></a>
       </div> 
     </div>
    <p class="pull-right">&copy; m-xpert</p>
  </div><!-- Container End -->
  </div></body>
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery-ui.min.js" type="text/javascript"></script>
  <script src="/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
  {{-- <script src="/themes/js/jquery.js" type="text/javascript"></script> --}}
  <script src="/themes/js/bootstrap.min.js" type="text/javascript"></script>
  {{-- <script src="/themes/js/google-code-prettify/prettify.js"></script> --}}
  
  <script src="/themes/js/bootshop.js"></script>
    <script src="/themes/js/jquery.lightbox-0.5.js"></script>
  
  <!-- Themes switcher section ============================================================================================= -->



  <!--  Forms Validations Plugin -->
  <script src="/js/jquery.validate.min.js"></script>

  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src="/js/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="/js/bootstrap-datetimepicker.js"></script>

    <!--  Select Picker Plugin -->
    <script src="/js/bootstrap-selectpicker.js"></script>

  <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
  <script src="/js/bootstrap-checkbox-radio-switch-tags.js"></script>

  <!--  Charts Plugin -->
  <script src="/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
  <script src="/js/sweetalert2.js"></script>

 
  <!-- Wizard Plugin    -->
    <script src="/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="/js/bootstrap-table.js"></script>

  <!--  Plugin for DataTables.net  -->
    <script src="/js/jquery.datatables.js"></script>


  <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->

   <script>
      @php
$max=max($price);
$max=$max+1000;
        echo " var dataStock = {labels: [";
foreach ($week as $key) {
    echo "'".$key."',";
  }
  echo"],series: [[";
         foreach ($price as $value) {
             echo "'".$value."',";
            }

           echo "]]};var optionsStock = {lineSmooth: false,height: \"260px\",axisY: {offset: 100,labelInterpolationFnc: function(value) {return '' + value;}},low: 0,high: ".$max.",classNames: {point: 'ct-point ct-green',line: 'ct-line ct-green'}};Chartist.Line('#chartStock', dataStock, optionsStock);";
@endphp
    </script>

</html>