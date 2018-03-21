@extends('layouts.index')
@section('content')
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        
    </div>
@endif

   <div class="middle-box text-center loginscreen animated fadeInDown"> 
<form class="m-t" id="fn-form" method="POST" action="{{'addplea'}}" enctype="multipart/form-data">
  <h3 class="site-title">Add Plea</h3>
                        {{ csrf_field() }}
                       
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <div class="form-group">
                        <textarea class="form-control" rows="5" id="description" name="description" placeholder="Please enter your need's details" required=""></textarea>
                         @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        
                        </div>
                      </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                        
                        <select id="category" name="category" class="form form-control" >
                          <option selected="" disabled="">Select Category</option>
                          <option value="health">Health</option>
                          <option value="environment">Environment</option>
                          <option value="natural disaster">Natural Disaster</option>
                          <option value="Education">Education</option>
                          <option value="community">Community Development</option>
                          <option value="orphan">Orphan</option>
                          <option value="marriage">Marriage</option>
                          <option value="loan">Loan Repayment</option>
                          <option value="bail">Bailing Out</option>
                          <option value="food and shelter">Food and Shelter</option>
                        </select>
                        
                        </div>

                             <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
                           

                        <input type="date" id="deadline" name ="deadline" class="form-control" data-toggle="tooltip" data-placement="top" title="deadline to get aid" required="">
                         @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif

                                <span id="deadl"></span>
                        
                        </div>

                      


                        <div id="add_verify"  class="form-group{{ $errors->has('verify') ? ' has-error' : '' }}">
                          <select id="verify" name="verify" class="form-control" required>
                            <option selected disabled>Verify</option><option value="I can verify my claim">I can verify my claim</option>
                            <option value="I cannot verify my claim">I cannot verify my claim</option>
                          </select>
   
                        </div>

                        <div id="means"  class="form-group{{ $errors->has('medium') ? ' has-error' : '' }}">
                          <select id="medium" name="medium" class="form-control" required="">
                            <option selected disabled>Mode of Assistance</option>
                            <option value="money">Money</option>
                            <option value="goods">Goods</option>
                          </select>
   
                        </div>

                        <div id="item">
                       


                          @if ($errors->has('amount'))<span class="help-block"><strong>{{ $errors->first('amount') }}</strong></span>@endif
                          @if ($errors->has('goods'))<span class="help-block"><strong>{{ $errors->first('goods') }}</strong></span>@endif
                        </div>
                       
                     


                      <!-- Upload image of user -->
                      <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <input type="file" id="file" name ="file" class="form-control"  data-toggle="tooltip" data-placement="top" title="upload a photo relevant to your need" required>
                         @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('file')}}</strong>
                                    </span>
                                @endif

                                 <span id="pic"></span>

                         </div>  
                        
                        <button type="submit" class="btn btn-primary block full-width m-b">Submit Plea</button>
                    

                 
                    </form>

                  </div>

         
        

@endsection