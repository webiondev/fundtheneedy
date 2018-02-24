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
			<h1>My Messages</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
					 @foreach ($data as $messages)
					 @if(\Request::is('mysent') and $messages->from==auth()->user()->id)
						<div class="pull-right">
						
							<div class="btn-group">
				
						
								   <a  href="{{Route('deletemessage', $messages->id)}}" class="btn btn-warning btn-filter">Delete</a>
									
					
							</div>
							

							
						</div>



						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr class="inbox">
										
										<td>
											@if($messages->from!=auth()->user()->id)
											<div class="media">
												<a href="#" class="pull-left">
													<img src="/img/{{$messages->file}}" class="media-photo">
												</a>
												<div class="media-body">

													<span class="media-meta pull-right">{{$messages->created_at}}</span>
													<h4 class="title">
														
														From: {{$messages->name}}
														
														<span class="pull-right"></span>
													</h4>
													<p class="summary">{{$messages->message}}</p>
													
												</div>
											</div>
											@endif

										</td>
									</tr>
									
								
									
								</tbody>
							</table>
						</div>
						@elseif((\Request::is('mymessage') and $messages->from!=auth()->user()->id))

							<div class="pull-right">
						
							<div class="btn-group">
				
						
								   <a  href="{{Route('deletemessage', $messages->id)}}" class="btn btn-warning btn-filter">Delete</a>
								   <a  href="{{Route('reply', array($messages->id,$messages->from, $messages->date))}}" class="btn btn-default btn-filter">Reply</a>
									
					
							</div>
							

							
						</div>



						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr class="inbox">
										
										<td>
											@if($messages->from!=auth()->user()->id)
											<div class="media">
												<a href="#" class="pull-left">
													<img src="/img/{{$messages->file}}" class="media-photo">
												</a>
												<div class="media-body">

													<span class="media-meta pull-right">{{$messages->created_at}}</span>
													<h4 class="title">
														
														From: {{$messages->name}}
														
														<span class="pull-right"></span>
													</h4>
													<p class="summary">{{$messages->message}}</p>
													
												</div>
											</div>
											@endif

										</td>
									</tr>
									
								
									
								</tbody>
							</table>
						</div>
	
						@endif

						@endforeach
					</div>
				</div>
				<div class="content-footer">
					<p>
						Page © - 2016 <br>
						Powered By <a href="https://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a>
					</p>
				</div>
			</div>
		</section>
		
	</div>
</div>
{{$data->links()}}


@endsection