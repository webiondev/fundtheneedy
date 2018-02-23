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
    <div class="container">
	<div class="row">
		
		<section class="content">
			<h1>My Messages</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
					 @foreach ($data as $messages)
						<div class="pull-right">
							<div class="btn-group">
								
						
								@if($messages->from==auth()->user()->id)
								   <a  href="{{Route('deletemessage', $messages->id)}}" class="btn btn-warning btn-filter">Delete</a>
									
								@else
								  <a  href="{{Route('deletemessage', $messages->id)}}" class="btn btn-warning btn-filter">Delete</a>
								   
								<a  href="{{Route('reply', array($messages->id,$messages->from))}}" class="btn btn-default btn-filter">Reply</a>
								@endif
							</div>
							<?php $i++ ?>
						</div>



						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr class="inbox">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1" name="checkbox">
												<label for="checkbox1"></label>
											</div>
										</td>
										<td>
											
										</td>
										<td>
											
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
											

										</td>
									</tr>
									
								
									
								</tbody>
							</table>
						</div>
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