<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>m-xpert Graph</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

  

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper">
    

 
  	



        <div class="charts-content">
            <div class="container-fluid">
          
                <div class="row">
                 

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
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


</body>
<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>


    <!-- Sweet Alert 2 plugin -->
	<script src="/assets/js/sweetalert2.js"></script>

	<script src="/assets/js/light-bootstrap-dashboard.js"></script>
  <!--  Charts Plugin -->
  <script src="/assets/js/chartist.min.js"></script>
	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<!-- <script src="/assets/js/demo.js"></script> -->

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
