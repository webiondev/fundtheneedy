@extends('layouts.index')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}

    </div>
@endif


<h3 class="site-title">{{__('global.seekers')}}</h3>

 @if($data->isEmpty())
                     <b>{{__('global.no_seekers')}}</b><br>
		     <p>{{__('global.check_later')}}</p>
  @endif
{{$data->links()}
@foreach($data as $data_)
<div class="container">

	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">




    	 <div >
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{$data_->name}}</h2>
                      <p><strong>{{__('global.user_id')}} : </strong>{{$data_->id}} </p>
                    <p><strong>{{__('global.ipaddress')}} : </strong>{{$data_->ipaddress}} </p>
                    <p><strong>{{__('global.logged_in')}} : </strong>{{$data_->logged_in}} </p>
                    <p><strong>{{__('global.name')}} : </strong>{{$data_->name}} </p>
                    <p><strong>{{__('global.email')}} : </strong> {{$data_->email}} </p>
                    <p><strong>{{__('global.city')}} : </strong>
                        <span class="tags">{{$data_->city}}</span>
                        <p><strong>{{__('global.country')}} : </strong>
                            <span class="tags">{{$data_->country}}</span>
                    </p>
                    <p><strong>{{__('global.email_verified')}} : </strong>
                        <span class="tags">{{$data_->verified}}</span>

                    </p>
                      <p><strong>{{__('global.occupation')}} : </strong>
                        <span class="tags">{{$data_->occupation}}</span>

                    </p>
                      <p><strong>{{__('welcome.type')}} : </strong>
                        <span class="tags">{{$data_->type}}</span>

                        <p><strong>{{__('global.created_at')}} : </strong>
                          <span class="tags">{{$data_->created_at}}</span>

                       <div class="btn-group dropup btn-block">


                   <!-- <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> {{__('global.options')}} </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                            <li><a href="{{Route('profile_this', $data_->id)}}"  role="button">{{__('global.know_more')}}</a></li>
                          @if(auth()->user()->type=='giver')
                        <li><a href="{{Route('askseekeracc', array($data_->user_id,$data_->id))}}"  role="button">{{__('global.ask_bank')}}</a></li>
                        <li> <a href="{{Route('askseekerinfo', array($data_->user_id,$data_->id))}}"  role="button">{{__('global.ask_address_contact')}}</a></li>
                        <li ><a href="{{Route('askseekerver', array($data_->user_id,$data_->id))}}"  role="button">{{__('global.verification')}}</a></li>
                        <li> <a href="{{Route('corroborate',array($data_->user_id,$data_->id) )}}"  role="button">{{__('global.corroborate')}}</a></li>
                            <li><a href="{{Route('addfav', array($data_->user_id,$data_->id))}}"  role="button">{{__('global.add_fav')}}</a></li>
                        <li> <a href="{{Route('confirmthisdonation', $data_->id)}}"  role="button">{{__('global.confirm_donation')}}<sup>{{__('global.bank_transfer')}}</sup></a></li>
                        @endif -->
                        <!-- <li><a href="{{Route('pay_card', $data_->id)}}"  role="button">pay by card</a></li> -->
                      <!-- </ul> -->

                   <!--  <button class="btn btn-info btn-block"><span class="fa fa-user"></span><a href="{{Route('profile_this', $data_->id)}}" class="btn btn-info btn-xs" role="button">know more</a></button> -->
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="{{asset('img/'.$data_->file)}}" alt="" class="img-circle img-responsive">

                    </figure>
                </div>

            </div>
            <div class="col-xs-12 divider text-center">

               <!--  <div class="col-xs-12 col-sm-4 emphasis btn-group dropup btn-block">
                    <br>

                   <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                            <li><a href="{{Route('profile_this', $data_->id)}}"  role="button">Know more</a></li>
                        <li><a href="{{Route('askseekeracc', array($data_->user_id,$data_->id))}}"  role="button">ask bank account</a></li>
                        <li> <a href="{{Route('askseekerinfo', array($data_->user_id,$data_->id))}}"  role="button">ask address/contact</a></li>
                        <li ><a href="{{Route('askseekerver', array($data_->user_id,$data_->id))}}"  role="button">ask verification</a></li>
                        <li> <a href="{{Route('corroborate',array($data_->user_id,$data_->id) )}}"  role="button">corroborate claim</a></li>
                            <li><a href="{{Route('addfav', array($data_->user_id,$data_->id))}}"  role="button">add favorite</a></li>
                        <li> <a href="{{Route('confirmthisdonation', $data_->id)}}"  role="button">confirm donation<sup>bank transfer</sup></a></li>
                         <li><a href="{{Route('pay_card', $data_->id)}}"  role="button">pay by card</a></li>
                      </ul>  -->

                   <!--  <button class="btn btn-info btn-block"><span class="fa fa-user"></span><a href="{{Route('profile_this', $data_->id)}}" class="btn btn-info btn-xs" role="button">know more</a></button> -->
                <!-- </div> -->
                <!-- <div class="col-xs-12 col-sm-4 emphasis">
                    <br>



                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                            <li><a href="{{Route('profile_this', $data_->id)}}"  role="button">Know more</a></li>
                        <li><a href="{{Route('askseekeracc', array($data_->user_id,$data_->id))}}"  role="button">ask bank account</a></li>
                        <li> <a href="{{Route('askseekerinfo', array($data_->user_id,$data_->id))}}"  role="button">ask address/contact</a></li>
                        <li ><a href="{{Route('askseekerver', array($data_->user_id,$data_->id))}}"  role="button">ask verification</a></li>
                        <li> <a href="{{Route('corroborate',array($data_->user_id,$data_->id) )}}"  role="button">corroborate claim</a></li>
                     	<li><a href="{{Route('addfav', array($data_->user_id,$data_->id))}}"  role="button">add favorite</a></li>
                        <li> <a href="{{Route('confirmthisdonation', $data_->id)}}"  role="button">confirm donation<sup>bank transfer</sup></a></li>
                        <li><a href="{{Route('pay_card', $data_->id)}}"  role="button">pay by card</a></li>
                      </ul>
                    </div>
                </div>-->
            </div>
    	 </div>


		</div>
	</div>
</div>

@endforeach
{{$data->links()}}
@endsection
