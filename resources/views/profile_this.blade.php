@extends('layouts.index')
    @section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}    
    </div>
@endif

<div class="main-content">

    <div class="container">
        <h3 class="site-title">Seeker Information</h3>
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
                <i href="#">corroborated by 5</i><p></p><br/>
               
            </div>
             <p><a href="{{Route('askseekeracc', array($data[0]->user_id,$data[0]->id ))}}" class="btn btn-info btn-xs" role="button">ask bank account</a></p>
             <p><a href="{{Route('askseekerinfo', array($data[0]->user_id,$data[0]->id ))}}" class="btn btn-info btn-xs" role="button">ask contact/address</a></p>
             <p><a href="{{Route('askseekerver',  array($data[0]->user_id,$data[0]->id ))}}" class="btn btn-info btn-xs" role="button">ask verification</a></p>
             <p><a href="#" class="btn btn-info btn-xs" role="button">corroborate claim</a></p>
             <p><a href="#" class="btn btn-info btn-xs" role="button">add favorite</a></p>
             <p><a href="{{Route('confirmthisdonation', $data[0]->id)}}" class="btn btn-info btn-xs" role="button">confirm donation</a></p>

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
      <li class="list-group-item">Amount<span class="badge">{{$data[0]->amount}}</span></li>
      @else
      <li class="list-group-item">Quantity<span class="badge">{{$data[0]->goods}}</span></li>
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