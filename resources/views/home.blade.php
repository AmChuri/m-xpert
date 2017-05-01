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
    <div class="span6">Welcome!<strong> {{$user['name']}}</strong></div>
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
     <li> <a role="button" data-toggle="modal" style="padding-right:0" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <span class="btn btn-large btn-success"> Logout</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> </li>
   
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
          <div class="container">
            <a href="register.html"><img style="width:100%" src="/themes/images/carousel/demo.jpg" alt="special offers"/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
          </div>
          </div>
          <div class="item">
          <div class="container">
            <a href="register.html"><img style="width:100%;    height: 234px;" src="/themes/images/carousel/mobile.jpg" alt=""/></a>
                <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
          </div>
          </div>
          <div class="item">
          <div class="container">
            <a href="register.html"><img src="/themes/images/carousel/demo.jpg" alt=""/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            
          </div>
          </div>
           <div class="item">
           <div class="container">
            <a href="register.html"><img src="/themes/images/carousel/demo.jpg" alt=""/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
           
          </div>
          </div>
           <div class="item">
           <div class="container">
            <a href="register.html"><img src="/themes/images/carousel/demo.jpg" alt=""/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
          </div>
           <div class="item">
           <div class="container">
            <a href="register.html"><img src="/themes/images/carousel/demo.jpg" alt=""/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
          </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div> 
</div>
<div id="mainBody">
    <div class="container">
    <div class="row">
<!-- Sidebar ================================================== -->
    <div id="sidebar" class="span3">
        <div class="well well-small"><a id="myCart" href="product/checkout"><img src="/themes/images/ico-cart.png" alt="cart">{{count($cart)}} Items in your cart  <span class="badge badge-warning pull-right">₹ {{array_sum($amount)}}</span></a></div>
        <ul id="sideManu" class="nav nav-tabs nav-stacked">
             <li class="subMenu open"><a> Mobiles</a>
                <ul>
                <li><a class="active" href="/product/mobiles/s/motorola"><i class="icon-chevron-right"></i>Motorola </a></li>
            <li><a class="active" href="/product/mobiles/s/google"><i class="icon-chevron-right"></i>Google </a></li>
            <li><a class="active" href="/product/mobiles/s/lenovo"><i class="icon-chevron-right"></i>Lenovo </a></li>
            <li><a class="active" href="/product/mobiles/s/sony"><i class="icon-chevron-right"></i>Sony </a></li>
            <li><a class="active" href="/product/mobiles/s/oneplus"><i class="icon-chevron-right"></i>OnePlus </a></li>
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
            <div class="well well-small">
            <h4>Featured Products <small class="pull-right">50+ featured products</small></h4>
            <div class="row-fluid">
            <div id="featured" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
              <ul class="thumbnails">
              @php
for($i=0;$i<4;$i++)
              {
                $getdata=$data[$i];
                $getdata=$getdata['attributes'];
echo"     <li class=\"span3\">
                  <div class=\"thumbnail\">
                  <i class=\"tag\"></i>
                    <a href=\"/product/mobiles/v/".$getdata['id']."\"><img src=\"/image/".$getdata['imageid']."\" alt=\"\"/ style=\"height:100px;\"></a>
                    <div class=\"caption\">
                      <h5>".substr($getdata['name'],0,15)."</h5>
                      <h4><a class=\"btn\" href=\"product_details.html\">VIEW</a> <span class=\"pull-right\">₹".$getdata['price']."</span></h4>
                    </div>
                  </div>
                </li>";
              }
              @endphp
         
             
              </ul>
              </div>
               <div class="item">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="product_details.html"><img src="/themes/images/products/5.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="product_details.html"><img src="/themes/images/products/6.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/7.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/8.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
              </ul>
              </div>
               <div class="item">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/9.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/10.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/11.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/1.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
              </ul>
              </div>
               <div class="item">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/2.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/3.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/4.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/themes/images/products/5.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
              </ul>
              </div>
              </div>
              <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#featured" data-slide="next">›</a>
              </div>
              </div>
        </div>
               <h4>Latest Products </h4>
              <ul class="thumbnails">
              @php
              for($i=0;$i<6;$i++)
              {
                $getdata=$data[$i];
                $getdata=$getdata['attributes'];
                echo "<li class=\"span3\">
                  <div class=\"thumbnail\">
                    <a  href=\"/product/mobiles/v/".$getdata['id']."\"><img src=\"/image/".$getdata['imageid']."\" alt=\"\"/ style=\"height:300px;\"></a>
                    <div class=\"caption\">
                      <h5>".substr($getdata['name'],0,32)."</h5>
                      <p> 
                        ".substr($getdata['subdescription'], 0,10)." 
                      </p>
                     
                      <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">₹".$getdata['price']."</a></h4>
                    </div>
                  </div>
                </li>";
            }
                @endphp
              </ul> 

        </div>
        </div>
    </div>
</div>
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
    
    <!-- Themes switcher section ============================================================================================= -->

</body>
</html>