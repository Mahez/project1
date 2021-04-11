@extends('layouts.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content" style="padding-top:25px">
   <div class="container-fluid">
     <div class="col-12">

      <div class="row mb-2">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-4">

          <h3 class="title-head">User Data</h3>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
          <a class="btn btn-success btn-md" style="float:right; font-family: sans-serif;" href="{{ url( 'AddUserData' ) }}" ><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add new user</a>
        </div>

      </div>
    </div>
    
    <div class="row">
     <div class="col-12">
      <div class="">
       <!-- /.card-header -->
       <div class="card-body"  style="padding-top: 0;">

         <table id="example1"  class="table table-bordered table-striped">
          <thead>
           <tr>
             <th>Sl No</th>
             <th>First Name</th>
             <th>Email ID</th>
             <th>Status</th>
             <th>Date of Birth</th>
             <th>Action</th>
             
           </tr>
         </thead>
         <tfoot>
           <tr>
             <th>Sl No</th>
             <th>First Name</th>
             <th>Email ID</th>
             <th>Status</th>
             <th>Date of Birth</th>
             <th>Action</th>
           </tr>
       </tfoot>
         <tbody>
          @foreach ($UserData as $i => $UData)
          <tr>
           <td>{{$i+1}}</td>
           <td>{{$UData->first_name}}</td>
           <td>{{$UData->gmail_id}}</td>
           <td>{{$UData->status}}</td>
           <td>{{$UData->dob}}</td>


           <td><p style="font-size: 25px; margin-bottom: 0px"><a href="{{ route('view.userdata', ['id' => $UData->id]) }}"><span class="badge "><i class="fas fa-eye"></i></span></a>
           <a href="{{ route('edit.userdata', ['id' => $UData->id]) }}"><span class="badge "><i style="color: green;" class="fas fa-edit"></i></span></a> 

           
            <a style="cursor: pointer;" onclick="Delete('{{$UData->id}}')"><span class="badge "><i class="fas fa-trash" style="color: red;"></i></span></a></p>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
</div>
<!-- <script>
  $(function () {
    $("#example1").DataTable({
       "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
     $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    })
    
  });
  $("#chkall").click(function()
  {
         if($("#chkall").is(':checked')){
            $("#states > option").prop("selected", "selected");
            $("#states").trigger("change");
        }
        else 
        {
          console.log("unchecked");
            $("#states > option").removeAttr("selected");
            $("#states").trigger("change");
        }
    });

  </script> -->
  <script>
    function Delete	(value) {
      if (confirm("Are your sure you want to delete the UserData?")) {
        $.ajax({
          type : 'get',
          url : '{{URL::to('DeleteUserData')}}',
          data : {'Id':value},
          success:function(data){
            window.location.reload();
          } 
        });

      } else {

      }
    }
  </script>
  <script>
    function DeleteAll() {
      if (confirm("Are your sure you want to delete all the record?")) {
        $.ajax({
          type : 'get',
          url : '{{URL::to('UserDataMassDelete')}}',
          data : {'Id':''},
          success:function(data){
            window.location.reload();
          } 
        });

      } else {

      }
    }
  </script>
  @endsection