@extends('layouts.app');
<style>
  .this_content{
    width: 50%;
    margin: auto;
  }

</style>
<div class="this_content">
  <div class="form-group">
    <label class="col-md-4 control-label">First Name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
      </div>
    </div>
  </div>

  <!-- Text input-->

  <div class="form-group">
    <label class="col-md-4 control-label" >Last Name</label> 
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
      </div>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label">Location</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <select class="js-states browser-default select2" name="location_id" required id="location_id">
          <option value="option_select" disabled selected>Locations</option>
          @foreach($locations as $location)
              <option value="{{ $location->id }}">{{ $location->name}}</option>
          @endforeach
          </select>
      </div>
    </div>
  </div>

  <!-- Text input-->
        
  <div class="form-group">
    <label class="col-md-4 control-label">JMBG</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input name="phone" placeholder="JMBG" class="form-control" type="text">
      </div>
    </div>
  </div>

  <!-- Text input-->
        
  <div class="form-group">
    <label class="col-md-4 control-label">Note</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
    <input name="address" placeholder="Note" class="form-control" type="text">
      </div>
    </div>
  </div>

  <hr>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
      <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
    </div>
  </div>

</div>
