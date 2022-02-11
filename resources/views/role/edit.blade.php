<!-- Extends template page -->
@extends('layouts.app')

<!-- Specify content -->
@section('content')

<h3>Edit Role</h3>

<div class="row">

   <div class="col-md-12 col-sm-12 col-xs-12">

     <!-- Alert message (start) -->
     @if(Session::has('message'))
     <div class="alert {{ Session::get('alert-class') }}">
        {{ Session::get('message') }}
     </div>
     @endif
     <!-- Alert message (end) -->

     <div class="actionbutton">

        <a class='btn btn-info float-right' href="{{route('role')}}">List</a>

     </div>

    <form action="{{route('role.update',$role->id)}}" method="post" >
        {{csrf_field()}}


       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Name <span class="required">*</span></label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="Name" class="form-control col-md-12 col-xs-12" name="description" placeholder="Change role description" required="required" type="text" value="{{old('name',$role->description)}}">

            @if ($errors->has('name'))
               <span class="errormsg">{{ $errors->first('name') }}</span>
            @endif
         </div>
       </div>

       {{-- <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Roles
         </label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="checkbox" id="1" name="roles[]" value="Admin"> Admin <br/>
            <input type="checkbox" id="2" name="roles[]" value="Programmer"> Programmer <br/>
            <input type="checkbox" id="3" name="roles[]" value="UI Designer"> UI Designer <br/>
            <input type="checkbox" id="4" name="roles[]" value="Quality Analysis"> Quality Analysis <br/>
            <input type="checkbox" id="5" name="roles[]" value="RnD"> Research & Development <br/><br/>

            @if ($errors->has('description'))
               <span class="errormsg">{{ $errors->first('description') }}</span>
            @endif
         </div>
       </div> --}}

       <div class="form-group">
          <div class="col-md-6">
            <input type="submit" name="submit" value='Submit' class='btn btn-success'>
          </div>
       </div>

    </form>

   </div>
</div>

@stop
