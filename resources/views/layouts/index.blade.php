<html>


@include('include.head')
<body>

    <div id="wrapper">

      

	@include('include.nav')  

    @yield('content') 

 
    
    
    <!-- Mainly scripts --><!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
     
    <!-- Flot -->
    <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>
    <!-- Peity -->
    <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>
    <!-- SweetAlert -->
    <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>


    <script type="text/javascript">
           
              $('#medium').change(function(){

                  if( $(this).val() == 'money'){
                    $('#remove2').remove();
                   $('#item').append(' <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}"> <div id="remove1" class="form-group"><input type="text" id="amount" name ="amount" class="form-control" placeholder="Aid Amount GBP" required=""></div></div></div');
                   
    }
                    if($(this).val()=='goods'){


                        $('#remove1').remove();
                         $('#item').append(' <div class="form-group{{ $errors->has('item') ? ' has-error' : '' }}"><div id="remove2" class="form-group"><input type="text" id="goods" name ="goods" class="form-control" placeholder="Goods Quantity" required=""></div></div></div>');


                    }
});
         </script>

        <script>
            $(document).ready(function(){
                $("#deleteBtn").click(function(){
                    $("#deleteModal").modal();

                });

            });

            function deleteThis() {

                $.ajax({
                    type:'GET',
                    url:'{{Route('deleteprofile', auth()->user()->id)}}',
                    dataType: 'JSON',
                    success: function (msg) {
                        window.location.href='/';
                    }

            });
       }




        </script>
   
</body>
</html>