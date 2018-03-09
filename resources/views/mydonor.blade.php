@extends('layouts.index')
    @section('content')
<div class="main-content">

    <div class="container">
        <h3 class="site-title">Giver Information</h3>
        @foreach($data as $data_)
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">

                    <div class="col-md-5">
                        <img class="img-responsive" src="../img/{{$data_->file}}" style="width:70%;">

        <div class=" clearfix">
            <h3>{{$data[0]->name}} </h3>
         
        
        </div>
         <p><a href="" class="btn btn-info btn-xs" role="button">Send Thanks</a></p>
    </div>
                <div class="col-md-7">
                     <div class="profile-block">
                <ul class="list-group">
    <li class="list-group-item">Email <span class="badge">{{$data_->email}}</span></li>
    <li class="list-group-item">City <span class="badge">{{$data_->city}}</span></li>
    <li class="list-group-item">Country <span class="badge">{{$data_->country}}</span></li>
    <li class="list-group-item">Type<span class="badge">{{$data_->type}}</span></li>

    <li class="list-group-item">Occupation <span class="badge">{{$data_->occupation}}</span></li>

   

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


            </div>

        </div>
    </div>

  @endsection  