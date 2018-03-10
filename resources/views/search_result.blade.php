@extends('layouts.index')
@section('content')


@foreach($data as $data_)
<div class="container">
            <div class="col-sm-12">

                  <div class="bs-calltoaction bs-calltoaction-primary">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">message details</h1>
                            <div class="cta-desc">
                               <p>{{$data_->message}}</p>
                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="{{Route('reply', array($data_->id,$data_->from, $data_->created_at))}}"" class="btn btn-lg btn-block btn-primary">see message history</a>
                        </div>
                     </div>
                </div>
                </div>
            </div>
@endforeach
@endsection