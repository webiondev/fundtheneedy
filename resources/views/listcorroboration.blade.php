@extends('layouts.index')
@section('content')


<title>Fundtheneedy | Corroboration</title>
    <div class="main-content">

        <div class="container">
            <h3 class="site-title">{{__('global.corroborators')}}</h3>
            @if($data->isEmpty())
                                <b>{{__('global.no_corroborators')}}</b><br>
           		     <p>{{__('global.check_later')}}</p>
             @endif
            @foreach($data as $data_)
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="panel">
                                <div class=" panel-body ">

                                    <div class="col-md-5">
                                        <img class="img-responsive" src="../img/{{$data_->file}}" style="width:70%;">


                                    </div>
                                    <div class="col-md-7">
                                        <div class="profile-block">
                                            <ul class="list-group">
                                                <li class="list-group-item">{{__('global.name')}} <span class="badge">{{$data_->name}}</span></li>
                                                <li class="list-group-item">{{__('global.email')}} <span class="badge">{{$data_->email}}</span></li>
                                                <li class="list-group-item">{{__('global.city')}} <span class="badge">{{$data_->city}}</span></li>
                                                <li class="list-group-item">{{__('global.country')}} <span class="badge">{{$data_->country}}</span></li>
                                                <li class="list-group-item">{{__('welcome.type')}}<span class="badge">{{$data_->type}}</span></li>

                                                <li class="list-group-item">{{__('global.occupation')}} <span class="badge">{{$data_->occupation}}</span></li>




                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                @endforeach

        </div>
    </div>
@endsection
