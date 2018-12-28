@extends('layouts.index')
    @section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="main-content">

    <div class="container">
        <h3 class="site-title">{{__('global.seeker_info')}}</h3>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">

                    <div class="col-md-5">
                        <img class="img-responsive" src="../img/{{$data[0]->file}}" style="width:30%;">

        <div class=" clearfix">
            <h3>{{$data[0]->name}} </h3>
            <div class="profile-ratings">
                <!-- corroborrated by..link to them -->


            </div>




           <form class="form-group " id="fn-form" method="POST"
           action="{{url('confirmingdonation')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                       <input type="hidden" name="need_id" value="{{$data[0]->id}}">
                        <input type="hidden" name="user_id" value="{{$data[0]->user_id}}">
                       	@if($data[0]->medium =='money')
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <div class="form-group">
                         <input type="text" id="amount" name ="amount" class="form-control  form-control-sm" placeholder="{{__('global.amount_donated')}} {{$data[0]->currency}}" required="">
                         @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif

                        </div>
                      </div>

                      @elseif($data[0]->medium =='goods')
                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <div class="form-group">
                         <input type="text" id="quantity" name ="quantity" class="form-control  form-control-sm" placeholder="{{__('global.quantity')}}" required="">
                         @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif

                        </div>
                      </div>
                      @endif

                       <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">


                        <input type="date" id="ddate" name ="date" class="form-control" data-toggle="tooltip" data-placement="top" title="{{__('global.donated_on')}}" required="">
                         @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif



                        </div>
                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <input type="file" id="file" name ="file" class="form-control"  data-toggle="tooltip" data-placement="top" title="{{__('global.upload_proof')}}" required>
                         @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('file')}}</strong>
                                    </span>
                                @endif

                                 <span id="pic"></span>

                         </div>
                         <button type="submit" class="btn btn-primary block full-width m-b">{{__('global.confirm')}}</button>

                      </form>

           <hr>



        </div>
    </div>
                <div class="col-md-7">
                     <div class="profile-block">
                <ul class="list-group">
    <li class="list-group-item">{{__('global.email')}} <span class="badge">{{$data[0]->email}}</span></li>
    <li class="list-group-item">{{__('global.city')}} <span class="badge">{{$data[0]->city}}</span></li>
    <li class="list-group-item">{{__('global.country')}} <span class="badge">{{$data[0]->country}}</span></li>
    <li class="list-group-item">{{__('welcome.type')}}<span class="badge">{{$data[0]->type}}</span></li>

    <li class="list-group-item">{{__('global.occupation')}} <span class="badge">{{$data[0]->occupation}}</span></li>

    <li class="list-group-item">{{__('global.need_category')}} <span class="badge">{{$data[0]->category}}</span></li>
    <li class="list-group-item">{{__('global.deadline')}}<span class="badge">{{$data[0]->deadline}}</span></li>
    <li class="list-group-item">{{__('global.verification')}}<span class="badge">{{$data[0]->verify}}</span></li>
      <li class="list-group-item">{{__('global.assistance_type')}}<span class="badge">{{$data[0]->medium}}</span></li>
      @if ($data[0]->medium=='money')
      <li class="list-group-item">{{__('global.amount')}}<span class="badge">{{$data[0]->amount}} {{$data[0]->currency}}</span></li>
      @else
      <li class="list-group-item">{{__('global.quantity')}}<span class="badge">{{$data[0]->goods}}</span></li>
      @endif

  </ul>
            </div>
                </div>


                </div>
                </div>
                </div>
                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">
                 <div class="col-md-12">

            {{$data[0]->description}}
            <hr >


        </div>
            </div>


                </div>
                </div>
                </div>


            </div>

        </div>
    </div>
  @endsection
