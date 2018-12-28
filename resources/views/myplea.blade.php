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
                    <p><strong>{{__('global.need_category')}}: </strong>{{$data_->category}} </p>
                    <p><strong>{{__('global.assistance_type')}}: </strong> {{$data_->medium}} </p>
                    <p><strong>{{__('global.deadline')}}: </strong>
                        <span class="tags">{{$data_->deadline}}</span>

                    </p>
                    <p><strong>{{__('global.verification')}}: </strong>
                        <span class="tags">{{$data_->verify}}</span>

                    </p>
                      <p><strong>{{__('global.money_needed')}}: </strong>
                        <span class="tags">{{$data_->amount}} {{$data_->currency}}</span>

                    </p>
                     <p><strong>{{__('global.goods_needed')}}: </strong>
                        <span class="tags">{{$data_->goods}} </span>

                    </p>
                      <p><strong>{{__('global.description')}}: </strong>
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

                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span><a href="{{Route('donorall')}}" class="btn btn-info btn-xs" role="button">{{__('global.my_donors')}}</a></button>

                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <br>
                    <br>
                    <br>
                    <br>
                    <button class="btn btn-info btn-block"><span class="fa fa-remove"></span><a href="{{Route('deleteplea', $data_->id)}}" class="btn btn-info btn-xs" role="button">{{__('global.delete')}}</a></button>

                </div>
            </div>
       </div>
    </div>
  </div>
</div>

@endforeach

@endsection
