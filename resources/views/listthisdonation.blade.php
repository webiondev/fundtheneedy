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
        <h3 class="site-title">Your Need Which Recieved Donations</h3>
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
                <a href="{{Route('corroborate_count',$data[0]->id )}}">corroborated by {{$count_corroborate}} givers</a> <p></p><br/>

            </div>
            

           <hr>



        </div>
    </div>
                <div class="col-md-7">
                     <div class="profile-block">
                <ul class="list-group">
    <li class="list-group-item">Email <span class="badge">{{$data[0]->email}}</span></li>
    <li class="list-group-item">City <span class="badge">{{$data[0]->city}}</span></li>
    <li class="list-group-item">Country <span class="badge">{{$data[0]->country}}</span></li>
    <li class="list-group-item">Type<span class="badge">{{$data[0]->type}}</span></li>

    <li class="list-group-item">Occupation <span class="badge">{{$data[0]->occupation}}</span></li>

    <li class="list-group-item">Category <span class="badge">{{$data[0]->category}}</span></li>
    <li class="list-group-item">Deadline<span class="badge">{{$data[0]->deadline}}</span></li>
    <li class="list-group-item">Verify<span class="badge">{{$data[0]->verify}}</span>
      <li class="list-group-item">Assistance Type<span class="badge">{{$data[0]->medium}}</span>
         @if ($data[0]->medium=='money')
             @if($data[0]->amount=='0')
                            <li class="list-group-item">Amount<span class="badge">all amounts acquired</span></li>
             @else
                <li class="list-group-item">Amount<span class="badge">{{$data[0]->amount}} {{$data[0]->currency}}</span></li>
             @endif
         @else
             @if($data[0]->goods=='0')
                            <li class="list-group-item">Quantity<span class="badge">all goods acquired</span></li>
             @else
                <li class="list-group-item">Quantity<span class="badge">{{$data[0]->goods}}</span></li>
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