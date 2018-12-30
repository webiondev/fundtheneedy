@extends('layouts.index')
    @section('content')
<div class="main-content">

    <div class="container">
        <h3 class="site-title">{{__('global.giver_info')}}</h3>
        {{$data->links()}}

        @foreach($data as $data_)


        <div class="row">
            <div class="col-md-9">
                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">

                    <div class="col-md-5">
                        <img class="img-responsive" src="../img/{{$data_->file}}" style="width:98%;">

        <div class=" clearfix">
            <h3>{{$data[0]->name}} </h3>


        </div>
         <!-- <p><a href="" class="btn btn-info btn-xs" role="button">Send Thanks</a></p> -->
    </div>
                <div class="col-md-7">
                     <div class="profile-block">
                <ul class="list-group">
    <li class="list-group-item">{{__('global.email')}} <span class="badge">{{$data_->email}}</span></li>
    <li class="list-group-item">{{__('global.city')}} <span class="badge">{{$data_->city}}</span></li>
    <li class="list-group-item">{{__('global.country')}} <span class="badge">{{$data_->country}}</span></li>
    <li class="list-group-item">{{__('welcome.type')}}<span class="badge">{{$data_->type}}</span></li>

    <li class="list-group-item">{{__('global.occupation')}} <span class="badge">{{$data_->occupation}}</span></li>
     <li class="list-group-item">{{__('global.amount_donated')}} <span class="badge">{{$data_->amount}} [your currency]</span></li>
      <li class="list-group-item">{{__('global.quantity_donated')}} <span class="badge">{{$data_->quantity}} </span></li>

    <li class="list-group-item">{{__('global.need_category')}} <span class="badge"><a href="{{Route('thisdonationdetails', $data_->need_id)}}">See Details</a></span></li>
       <li class="list-group-item">{{__('global.proof_of_donation')}} <span class="badge"><a href="{{asset('img/'.$data_->proof)}}" download>Download</a></span></li>




  </ul>
            </div>
                </div>


                </div>
                </div>
                </div>

            </div>


                </div>
                @endforeach
                {{$data->links()}}
                </div>
                </div>


            </div>

        </div>
    </div>

  @endsection
