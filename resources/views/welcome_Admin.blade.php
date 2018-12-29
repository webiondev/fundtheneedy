@extends('layouts.index')
    @section('content')

    <div id="wrapper">


      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}

          </div>
      @endif
    <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    {{Auth::user()[0]['id']}}

                </div>


                make admin portal
                      display and delete for users, need, donation, iplog
                      send email

</body>
</html>
@endsection
