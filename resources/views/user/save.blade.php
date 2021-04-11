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
            
            <form role="form" method="post" class="col-md-10" action="{{ route('save.userdata') }}" style="margin:0 auto" onsubmit="return Validate(this);">

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
                  <input type="text" class="form-control" name="first_name"  value=""  required>
                </div>
              </div>
            
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="first_name">Last Name</label>
                  <input type="text" class="form-control" name="last_name"  value=""  required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email"  value=""  required>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-12">
                 <div class="form-group">
                  <label for="exampleInputPassword1">Date of Birth</label>
                  <input type="date" class="form-control" name="dob"  value=""  required>
                </div>
              </div>
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter Address" required></textarea>
            
          </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Education</label>
              <select name="education" class="form-control" id="education" required>
                <option value="">Select Education</option>
                <option value="ug">UG</option>
                <option value="pg">PG</option>
                <option value="other">Other</option>
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
                  <input type="radio" id="checkboxPrimary11" value="Y" name="status" checked="">
                  <label for="checkboxPrimary11">Yes
                  </label>
                </div>
                
                <div class="icheck-primary d-inline">
                  <input type="radio" id="checkboxPrimary12" value="N"  name="status" >
                  <label for="checkboxPrimary12">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
                   
          <div style="max-width: 200px; margin: auto;">
            <a href="/home" class="btn btn-primary">Cancel</a>
            <input type="submit" class="btn btn-primary" value="Submit">
          </div><br><br>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
  $('.dob').datepicker();
</script>
@endsection