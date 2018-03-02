@extends('layouts.index')
    @section('content')

@foreach ($data as $data_)
<div class="container"  id="tourpackages-carousel">
     
     
      <div class="column">
        
    
        <div class="col-xs-9 col-sm-9 col-md-9">
          <div class="thumbnail">
            <img src="img/{{$data_->file}}" alt="">
            <div class="btn-group btn-group-justified demoPadder" role="group" aria-label="Justified button group">
      <a href="#" data-toggle="tooltip" title="need category" class="btn btn-default" role="button">{{$data_->category}}</a>
      <a href="#" data-toggle="tooltip" title="assistance type" class="btn btn-default" role="button">{{$data_->medium}}</a>
      <a href="#" data-toggle="tooltip" title="need deadline" class="btn btn-default" role="button">{{$data_->deadline}}</a>
      <a href="#" data-toggle="tooltip" title="can I verify?" class="btn btn-default" role="button">{{$data_->verify}}</a>
    </div>    
              <div class="caption">
                <h4>{{$data_->name}}</h4>
                <h6>You Donated {{$data_->amount}} GBP </h6>
                <h6>You Donated {{$data_->goods}} items </h6>
                <h6>Date {{$data_->date}}  </h6>
                
                <p><a href="{{Route('profile_this', $data_->donated_for)}}" class="btn btn-info btn-xs" role="button">know more</a>
                    
            	
             
            
      </p>

            </div>
          </div>
        </div>
            
        </div>
        </div>
        @endforeach
  @endsection  