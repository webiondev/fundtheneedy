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
                    Replying to {{$id[0]->name}} {{$id[0]->email}}</h3>
            
                    
            </div>
            <div class="panel-body">
                <ul class="list-group">
             
                    <li class="list-group-item">
                        <div class="row">
                           
                            <div class="col-xs-10 col-md-11">
                                
                                <div class="comment-text">
                                   {{$id[0]->message}}
                                </div>
                                
                            </div>
                        </div>
                    </li>
                    
                </ul>
                <form id="fn-form" method="POST" action="{{Route('replythis')}}">
                	  {{ csrf_field() }}

               	<input type="hidden" name="to_" value="{{$id[0]->from}}"> 	  
                <div class="form-group">
				  <label for="comment">Your Message:</label>
				  <textarea class="form-control" rows="5" id="comment" name="message"></textarea>

				 
				</div>
				 <button class="btn btn-default">Reply</button>
				</form>
            </div>

        </div>




@endsection
