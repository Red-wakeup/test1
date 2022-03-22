@extends('beetle.layout')
@section('content')
 
<div class="card">
  <div class="card-header">新增</div>
  <div class="card-body">
      
      <form action="{{ url('beetle') }}" method="post">
        {!! csrf_field() !!}
        <label>名稱</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>學名</label></br>
        <input type="text" name="scientific_name" id="scientific_name" class="form-control"></br>
        <label>品種</label></br>
        <input type="text" name="variety" id="variety" class="form-control"></br>
        <label>幼蟲期</label></br>
        <input type="text" name="larval_stage" id="larval_stage" class="form-control"></br>
        <label>成蟲壽命</label></br>
        <input type="text" name="insect_life" id="insect_life" class="form-control"></br>
        <input type="submit" value="儲存" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop