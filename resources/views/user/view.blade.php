@extends('layouts.app')
@section('content')
<div class="content-wrapper">

  <section class="content" style="padding-top:15px">
    <div class="container-fluid">

      <div class="col-12">

        <div class="row mb-2">
          <div class="col-sm-2">
            <a href="/UserData" class="btn btn-back" style="float:left;border-radius: 3px;background-color: aqua;margin-top: -5px;margin-left: -19px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;</a>
          </div>
          <div class="col-sm-3">
            
          </div>
          <div class="col-sm-4">
            <h3 class="title-head">Add User Data</h3>
          </div>
          <div class="col-sm-3">
          </div>
          
        </div>
      </div><br>
      <div class="row" style="justify-content: center;">
        <div class="col-md-6">
          <div class="card card-primary">
            
            <form role="form" id="form1" method="post" class="col-md-10" action="{{ route('update.userdata') }}" style="margin:0 auto" onsubmit="return Validate(this);">
              <input type="hidden" name="id" value="{{$userdata->id}}">
              @csrf
              @if( Session::has( 'success' ))
              <div class="alert alert-success alert-block" style="border-color: #8ac38b;color: #388E3C;background-color: #cde0c4;">
                <a class="close" data-dismiss="alert" href="#">×</a>
                <h4 class="alert-heading" style="font-weight:600">Success!</h4>
                <p style="font-weight:600">{{ Session::get('success') }}</p>
              </div>
              @elseif( Session::has( 'warning' ))
              <div class="alert alert-danger alert-block" style="border-color: #FFA07A;color: #388E3C;">
                <a class="close" data-dismiss="alert" href="#">×</a>
                <h4 class="alert-heading" style="font-weight:bold;color:white">Warning!</h4>
                <p style="font-weight:bold;color:white;">{{ Session::get('warning') }}</p>
              </div>

              @endif
              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" name="first_name"  value="{{$userdata->first_name}}"  required>
                </div>
              </div>
            
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="first_name">Last Name</label>
                  <input type="text" class="form-control" name="last_name"  value="{{$userdata->last_name}}"  required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="gmail_id"  value="{{$userdata->gmail_id}}"  required>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-12">
                 <div class="form-group">
                  <label for="exampleInputPassword1">Date of Birth</label>
                  <input type="date" class="form-control" name="dob"  value="{{$userdata->dob}}"  required>
                </div>
              </div>
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter Address" required>{{$userdata->address}}</textarea>
            
          </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Education</label>
              <select name="education" class="form-control" id="education" required>
                <option value="">Select Education</option>
                <option value="ug" @if($userdata->education=='ug') selected @endif>UG</option>
                <option value="pg" @if($userdata->education=='pg') selected @endif>PG</option>
                <option value="other" @if($userdata->education=='other') selected @endif>Other</option>
            </select>
            
          </div>

       
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label>Active</label>
              </div>
              <!-- checkbox -->
              <div class="form-group clearfix">
                <div class="icheck-primary d-inline">
                  <input type="radio" id="checkboxPrimary11" value="Y" name="status" @if($userdata->status=='Y') checked @endif>
                  <label for="checkboxPrimary11">Yes
                  </label>
                </div>
                
                <div class="icheck-primary d-inline">
                  <input type="radio" id="checkboxPrimary12" value="N"  name="status" @if($userdata->status=='N') checked @endif>
                  <label for="checkboxPrimary12">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
                   
          <br>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
  $("#form1 input, textarea, select, radio").prop("disabled", true);
  $('.dob').datepicker();
  $("#form1 input").prop("disabled", true);
</script>
@endsection