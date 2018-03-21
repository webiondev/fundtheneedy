@extends('layouts.index')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        
    </div>
@endif
 <?php 
       $i=0;
       ?>        
<h3 class="site-title">My Plea</h3>
@foreach($data as $data_)
<div class="container">
    
       
  <div class="row">
    <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

       <div >
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{$data_->name}}</h2>
                    <p><strong>need category: </strong>{{$data_->category}} </p>
                    <p><strong>assistance type: </strong> {{$data_->medium}} </p>
                    <p><strong>deadline to get aid: </strong>
                        <span class="tags">{{$data_->deadline}}</span> 
                        
                    </p>
                    <p><strong>verification: </strong>
                        <span class="tags">{{$data_->verify}}</span> 
                        
                    </p>
                      <p><strong>money needed: </strong>
                        <span class="tags">{{$data_->amount}} GBP</span> 
                        
                    </p>
                     <p><strong>goods needed: </strong>
                        <span class="tags">{{$data_->goods}} items</span> 
                        
                    </p>
                      <p><strong>Description </strong>
                        <span class="tags">{{$data_->description}}</span> 
                        
                    </p>
                     
                     
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="{{asset('img/'.$data_->file)}}" alt="" class="img-circle img-responsive">
                       
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                
                <div class="col-xs-12 col-sm-4 emphasis">
                    <br>
                    <br>
                    <br>
                    <br>                    
                   
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span><a href="{{Route('donorall')}}" class="btn btn-info btn-xs" role="button">my donors</a></button>

                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <br>
                    <br>
                    <br>
                    <br>                    
                    <button class="btn btn-info btn-block"><span class="fa fa-remove"></span><a href="{{Route('deleteplea', $data_->id)}}" class="btn btn-info btn-xs" role="button">delete plea</a></button>
                  
                </div>
            </div>
       </div>                 
    </div>
  </div>
</div>

@endforeach

@endsection