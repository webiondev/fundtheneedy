@extends('layouts.index')
    @section('content')
    <div id="wrapper">
        
  

    <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    {{Auth::user()->name}}
                   
                </div>  


   <!-- Do the rest contents -->
   
    <!-- Mainly scripts -->

</body>
</html>
@endsection
