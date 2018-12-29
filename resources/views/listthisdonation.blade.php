@extends('layouts.index')
@section('content')


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



<?php
$count_corroborate=$data[1];
$data=$data[0];


?>


<div class="main-content">

    <div class="container">
        <h3 class="site-title">{{__('global.need_donated')}}</h3>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">

                    <div class="col-md-5">
                        <img class="img-responsive" src="../img/{{$data[0]->file}}" style="width:100%;">

        <div class=" clearfix">
            <h3>{{$data[0]->name}} </h3>
            <div class="profile-ratings">
                <!-- corroborrated by..link to them -->
                <a href="{{Route('corroborate_count',$data[0]->id )}}">{{__('global.corroborated_by')}} {{$count_corroborate}} {{__('global.givers')}}</a> <p></p><br/>

            </div>


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
    <li class="list-group-item">{{__('global.verification')}}<span class="badge">{{$data[0]->verify}}</span>
      <li class="list-group-item">{{__('global.assistance_type')}}<span class="badge">{{$data[0]->medium}}</span>
         @if ($data[0]->medium=='money')
             @if($data[0]->amount=='0')
                            <li class="list-group-item">{{__('global.amount')}}<span class="badge">{{__('global.all_amounts')}}</span></li>
             @else
                <li class="list-group-item">{{__('global.amount')}}<span class="badge">{{$data[0]->amount}} {{$data[0]->currency}}</span></li>
             @endif
         @else
             @if($data[0]->goods=='0')
                            <li class="list-group-item">{{__('global.quantity')}}<span class="badge">{{__('global.all_goods')}}</span></li>
             @else
                <li class="list-group-item">{{__('global.quantity_donated')}}<span class="badge">{{$data[0]->goods}}</span></li>
              @endif
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
