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
    <link id="callCss" rel="stylesheet" href="/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
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
		       <div class="well well-small"><a id="myCart" href="/product/checkout"><img src="/themes/images/ico-cart.png" alt="cart">{{count($cart)}} Items in your cart  <span class="badge badge-warning pull-right">₹ {{array_sum($amount)}}</span></a></div>
	   <ul id="sideManu" class="nav nav-tabs nav-stacked">
            <li class="subMenu open"><a> Mobiles</a>
                <ul>
                <li><a class="active" href="motorola"><i class="icon-chevron-right"></i>Motorola </a></li>
            <li><a class="active" href="google"><i class="icon-chevron-right"></i>Google </a></li>
            <li><a class="active" href="lenovo"><i class="icon-chevron-right"></i>Lenovo </a></li>
            <li><a class="active" href="sony"><i class="icon-chevron-right"></i>Sony </a></li>
            <li><a class="active" href="oneplus"><i class="icon-chevron-right"></i>OnePlus </a></li>
               <li><a class="active" href="/product/mobiles/s/iphone"><i class="icon-chevron-right"></i>IPhone </a></li>
              <li><a class="active" href="/product/mobiles/s/samsung"><i class="icon-chevron-right"></i>Samsung </a></li>
            <li><a class="active" href="micromax"><i class="icon-chevron-right"></i>Micromax </a></li>
            

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
    <ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li><li><a href="/product/mobiles">Mobiles</a> <span class="divider">/</span></li>
		<li class="active">{{$id}} <span class="divider">/</span></li>
    </ul>
	<h3> Mobiles <small class="pull-right"> {{count($data)}} products are available </small></h3>	
	<hr class="soft"/>

	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Latest</option>
              <option>Pr0duct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>
	  
<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
	@php
	for($i=0;$i<count($data);$i++)
	{
	$getdata=$data[$i];
	$getdata=$getdata['attributes'];
	echo"
		<div class=\"row\">	  
			<div class=\"span2\">
				<img src=\"/image/".$getdata['imageid']."\" alt=\"\"/>
			</div>
			<div class=\"span4\">				
				<hr class=\"soft\"/>
				<h5>".$getdata['name']." </h5>
				<p>
				".substr($getdata['description'],0,100)."..
				</p>
				<a class=\"btn btn-small pull-right\" href=\"/product/mobiles/v/".$getdata['id']."\">View Details</a>
				<br class=\"clr\"/>
			</div>
			<div class=\"span3 alignR\">
			<form class=\"form-horizontal qtyFrm\">
			<h3> ₹ ".$getdata['price']."</h3>
			<label class=\"checkbox\">
				<input type=\"checkbox\">  Adds product to compare
			</label><br/>
			
			  <a href=\"/product/add/".$getdata['id']."\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
			  <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
			
				</form>
			</div>
		</div>";
		}
		@endphp
		<hr class="soft"/>

	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			@php
	for($i=0;$i<count($data);$i++)
	{
	$getdata=$data[$i];
	$getdata=$getdata['attributes'];
			echo "<li class=\"span3\">
			  <div class=\"thumbnail\"  style=\"height:350px;\">
				<a href=\"/product/mobiles/v/".$getdata['id']."\"><img src=\"/image/".$getdata['imageid']."\" alt=\"\" style=\"height:200px;\" /></a>
				<div class=\"caption\">
				  <h5>".$getdata['name']."</h5>
				  <p> 
					".$getdata['subdescription']."
				  </p>
				   <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"/product/add/".$getdata['id']."\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\"> ₹ ".$getdata['price']."</a></h4>
				</div>
			  </div>
			</li>";
			}
			@endphp
		  </ul>
	<hr class="soft"/>
	</div>
</div>
{{-- 
	<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
	<div class="pagination">
			<ul>
			<li><a href="#">&lsaquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">&rsaquo;</a></li>
			</ul>
			</div> --}}
			<br class="clr"/>
</div>
</div>
</div>
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
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	{{-- <script src="/themes/js/jquery.js" type="text/javascript"></script> --}}
	<script src="/themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="/themes/js/bootshop.js"></script>
    <script src="/themes/js/jquery.lightbox-0.5.js"></script>
	

</body>
</html>