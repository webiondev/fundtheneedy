@extends('layouts.index')
@section('content')
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}

    </div>
@endif

   <div class="middle-box text-center loginscreen animated fadeInDown">
<form class="m-t" id="fn-form" method="POST" action="{{'addplea'}}" enctype="multipart/form-data">
  <h3 class="site-title">{{__('global.add_plea')}}</h3>
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <div class="form-group">
                        <textarea class="form-control" rows="5" id="description" name="description" placeholder="{{__('global.need_detais')}} {{__('global.need_detais_max')}}" required=""></textarea>
                         @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif

                        </div>
                      </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">

                        <select id="category" name="category" class="form form-control" >
                          <option selected="" disabled="">{{__('global.select_category')}}</option>
                          <option value="health">{{__('global.health')}}</option>
                          <option value="environment">{{__('global.environment')}}</option>
                          <option value="natural disaster">{{__('global.natural')}}</option>
                          <option value="Education">{{__('global.education')}}</option>
                          <option value="community">{{__('global.community')}}</option>
                          <option value="orphan">{{__('global.orphan')}}</option>
                          <option value="marriage">{{__('global.marriage')}}</option>
                          <option value="loan">{{__('global.loan_repay')}}</option>
                          <option value="bail">{{__('global.bailing')}}</option>
                          <option value="food and shelter">{{__('global.food')}}</option>
                        </select>

                        </div>

                             <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">


                        <input type="date" id="deadline" name ="deadline" class="form-control" data-toggle="tooltip" data-placement="top" title="{{__('global.deadline')}}" required="">
                         @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif

                                <span id="deadl"></span>

                        </div>




                        <div id="add_verify"  class="form-group{{ $errors->has('verify') ? ' has-error' : '' }}">
                          <select id="verify" name="verify" class="form-control" required>
                            <option selected disabled>{{__('global.verification')}}</option><option value="I can verify my claim">{{__('global.i_can_verify')}}</option>
                            <option value="I cannot verify my claim">{{__('global.i_cannot_verify')}}</option>
                          </select>

                        </div>

                        <div id="means"  class="form-group{{ $errors->has('medium') ? ' has-error' : '' }}">
                          <select id="medium" name="medium" class="form-control" required="">
                            <option selected disabled>{{__('global.mode_of_assistance')}}</option>
                            <option value="money">{{__('global.money_needed')}}</option>
                            <option value="goods">{{__('global.goods_needed')}}</option>
                          </select>

                        </div>

                        <div id="item">



                          @if ($errors->has('amount'))<span class="help-block"><strong>{{ $errors->first('amount') }}</strong></span>@endif
                          @if ($errors->has('goods'))<span class="help-block"><strong>{{ $errors->first('goods') }}</strong></span>@endif
                        </div>




                      <!-- Upload image of user -->
                      <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <input type="file" id="file" name ="file" class="form-control"  data-toggle="tooltip" data-placement="top" title="{{__('global.upload')}}" required>
                         @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('file')}}</strong>
                                    </span>
                                @endif

                                 <span id="pic"></span>

                         </div>

                        <button type="submit" class="btn btn-primary block full-width m-b">{{__('global.submit_plea')}}</button>



                    </form>

                  </div>




@endsection
