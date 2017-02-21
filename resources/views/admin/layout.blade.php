<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="img/favicon.png" rel="shortcut icon" >
    <title>ARS CMS Sys</title>


    {!!Html::script('ng/angularjs.min.js')!!}
    
    {!!Html::style('css/bootstrap.min.css')!!}
   
    <!-- bootstrap theme -->
    
    {!!Html::style('css/bootstrap-theme.css')!!}
    <!--external css-->
    <!-- font icon -->
    
    {!!Html::style('css/elegant-icons-style.css')!!} 
    {!!Html::style('css/font-awesome.min.css')!!} 
    <!-- full calendar css-->
    {!!Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
    {!!Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css')!!}
    <!-- easy pie chart-->
    {!!Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
    <!-- owl carousel -->
    {!!Html::style('css/owl.carousel.css')!!}
    {!!Html::style('css/jquery-jvectormap-1.2.2.css')!!}
    <!-- Custom styles -->
    {!!Html::style('css/fullcalendar.css')!!}
    {!!Html::style('css/widgets.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    {!!Html::style('css/xcharts.min.css')!!}
    {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}
  </head>
       
  <body style=".background-color: #61798F; color: red;">
    <section id="container" class="">
    @if (Auth::guard('admin')->check())
          @include('admin.header.header')
          @include('admin.sidebar.sidebar')
          @yield('content')
          @yield('a')
          
          
    @else
          @yield('content')
      
    @endif
       </section>

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/jquery-ui-1.10.4.min.js')!!}
    {!!Html::script('js/jquery-1.8.3.min.js')!!}
    {!!Html::script('js/jquery-ui-1.9.2.custom.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.scrollTo.min.js')!!}
    {!!Html::script('js/jquery.nicescroll.js')!!}
    {!!Html::script('assets/jquery-knob/js/jquery.knob.js')!!}
    {!!Html::script('js/jquery.sparkline.js')!!}
    {!!Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
    {!!Html::script('js/owl.carousel.js')!!}
    {!!Html::script('js/fullcalendar.min.js')!!}
    {!!Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js')!!}
    {!!Html::script('js/calendar-custom.js')!!}
    {!!Html::script('js/jquery.rateit.min.js')!!}
    {!!Html::script('js/jquery.customSelect.min.js')!!}
    {!!Html::script('assets/chart-master/Chart.js')!!}
    {!!Html::script('js/scripts.js')!!}
    {!!Html::script('js/sparkline-chart.js')!!}
    {!!Html::script('js/easy-pie-chart.js')!!}
    {!!Html::script('js/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('js/jquery-jvectormap-world-mill-en.js')!!}
    {!!Html::script('s/xcharts.min.js')!!}
    {!!Html::script('js/jquery.autosize.min.js')!!}
    {!!Html::script('js/jquery.placeholder.min.js')!!}
    {!!Html::script('js/gdp-data.js')!!} 
    {!!Html::script('s/morris.min.js')!!}
    {!!Html::script('js/sparklines.js')!!}   
    {!!Html::script('js/charts.js')!!}
    {!!Html::script('js/jquery.slimscroll.min.js')!!}

    <script>
  $(function()({
    $(".click").click(){

      alert(0);
    }

  });
</script>

  </body>

  </html>