@extends('layouts.index')
@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        
    </div>
@endif

@foreach ($data as $data_)
  <div class="container" id="tourpackages-carousel">
      
      <div class="column">
        
        <div class="col-xs-11 col-sm-11 col-md-11">
          <div class="thumbnail">
<img src="img/{{$data_->file}}" alt="">
            <div class="btn-group btn-group-justified demoPadder" role="group" aria-label="Justified button group">
      <a data-toggle="tooltip" title="need category" class="btn btn-default" role="button">{{$data_->category}}</a> 
      <a data-toggle="tooltip" title="assistance type" class="btn btn-default" role="button">{{$data_->medium}}</a>
      <a  data-toggle="tooltip" title="need deadline" class="btn btn-default" role="button">{{$data_->deadline}}</a>
      <a  data-toggle="tooltip" title="can I verify?" class="btn btn-default" role="button">{{$data_->verify}}</a>
    </div>
              <div class="caption">
                <h4>{{auth()->user()->name}}</h4>

                <h6>Corroborated by </h6>
                @if ($data_->medium=="money")
                  <p>{{$data_->amount}} GBP</p>
                @endif

                <p>{{$data_->description}}</p>
                <div class="btn-group btn-group-justified demoPadder" role="group" aria-label="Justified button group">
                <p>
                  <a href="{{Route('donorthis', $data_->id)}}" class="btn btn-info btn-xs" role="button">My Donors</a>
                
                  <a href="{{Route('deleteplea', $data_->id)}}" class="btn btn-warning btn-xs" role="button">Delete</a></p>
                </div>
            </div>
          </div>
        </div>

        </div>
        
      </div>

@endforeach
{{$data->links()}}
@endsection
