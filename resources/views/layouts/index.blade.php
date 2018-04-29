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
    <!-- tAlert -->
    <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5aa6648acd1736001392fc74&product=sticky-share-buttons' async='async'></script>
    <script type="text/javascript">
           
              $('#medium').change(function(){

                  if( $(this).val() == 'money'){
                    $('#remove2').remove();
                   $('#item').append(' <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}"> <div id="remove1" class="form-group"><input type="text" id="amount" name ="amount" class="form-control" placeholder="Aid Amount" required=""></div></div></div><div id="remove3" class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}"><select id="currency" name="currency" class="form-control" required=""><option value="AUD">Australian Dollar</option> <option value="BRL">Brazilian Real </option><option value="CAD">Canadian Dollar</option><option value="CZK">Czech Koruna</option>          <option value="DKK">Danish Krone</option>          <option value="EUR" SELECTED="YES">Euro</option>          <option value="HKD">Hong Kong Dollar</option>          <option value="HUF">Hungarian Forint </option>         <option value="JPY">Japanese Yen</option><option value="MYR">Malaysian Ringgit</option><option value="MXN">Mexican Peso</option><option value="NOK">Norwegian Krone</option><option value="NZD">New Zealand Dollar</option><option value="PHP">Philippine Peso</option>          <option value="PLN">Polish Zloty</option><option value="GBP">Pound Sterling</option><option value="SGD">Singapore Dollar</option><option value="SEK">Swedish Krona</option><option value="CHF">Swiss Franc</option><option value="TWD">Taiwan New Dollar</option><option value="THB">Thai Baht</option><option value="TRY">Turkish Lira</option><option value="USD">U.S. Dollar</option></select></div>');
                   
    }
                    if($(this).val()=='goods'){


                        $('#remove1').remove();
                          $('#remove3').remove();
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
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'POST',
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