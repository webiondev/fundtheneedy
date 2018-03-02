@extends('layouts.index')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        
    </div>
@endif

  <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                  Your Reply
                </h3>
            
                    
            </div>
            <div class="panel-body">
            	@foreach($id as $id_)
                <ul class="list-group">
                
                    <li class="list-group-item">
                        <div class="row">
                           
                            <div class="col-xs-10 col-md-11">
                                
                                <div class="comment-text">
                                  {{$id_->name}}<h4 class="fa fa-volume-up"></h4>{{$id_->message}}<sup>{{$id_->created_at}}</sup>

                                </div>
                                
                            </div>
                        </div>
                    </li>
                    
                </ul>
                @endforeach
                <form id="fn-form" method="POST" action="{{Route('replythis')}}">
                	  {{ csrf_field() }}

               	<input type="hidden" name="date" value="{{$id_->created_at}}"> 	
               	<input type="hidden" name="root" value="{{$id_->message_root}}">
               	<input type="hidden" name="message_id" value="{{$id_->id}}">
                <input type="hidden" name="need_id" value="{{$id_->need_id}}">    
                <div class="form-group">
				  <label for="comment">Your Message:</label>
				  <textarea class="form-control" rows="5" id="comment" name="message"></textarea>

				 
				</div>
				 <button class="btn btn-default">Reply</button>
                 
				</form>
               
            </div>

        </div>






@endsection
