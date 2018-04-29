@extends('layouts.index')
@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        
    </div>
@endif
	
    <div class="container">
	<div class="row">
		
		<section class="content">
				  <h3 class="site-title">My Inbox</h3>

			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
					 @foreach ($data as $messages)

						@if($messages->from!=auth()->user()->id)

							<div class="pull-right">
						
							<div class="btn-group">
				
								<!-- {{Route('deletemessage', $messages->id)}} -->
								   <a  href="#" class="btn btn-warning btn-filter">Delete</a>
								   <a  href="{{Route('reply', array($messages->id,$messages->from, $messages->created_at))}}" class="btn btn-default btn-filter">Reply</a>
								   @if(auth()->user()->id=='giver')
								   <a  href="{{Route('confirmthisdonation' ,$messages->need_id)}}" class="btn btn-success btn-filter">Confirm Your Donation</a>
								   @endif
									
					
							</div>
							

							
						</div>



						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr class="inbox">
										
										<td>
											
													<div class="media">
												@if(auth()->user()->type=='giver')		
												<a href="" class="pull-left">
													<img src="/img/{{$messages->file}}" class="media-photo">
												</a>

												@else
												<a href="#" class="pull-left">
													<img src="/img/{{$messages->file}}" class="media-photo">
												</a>
												@endif
												<div class="media-body">

													<span class="media-meta pull-right">{{$messages->created_at}}</span>
													<h4 class="title">
														
														From: {{$messages->name}}
														
														<span class="pull-right"></span>
													</h4>
													<p class="summary">{{$messages->message}}</p>
													
												</div>
											</div>
											

										</td>
									</tr>
									
								
									
								</tbody>
							</table>
						</div>
	
						
						@endif
						@endforeach
					</div>
				</div>
				
			</div>
		</section>
		
	</div>
</div>



@endsection