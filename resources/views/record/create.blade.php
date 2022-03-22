@extends('record.layout')
@section('content')
 
<div class="card">
  <div class="card-header">新增</div>
  <div class="card-body">
      
      <form action="{{ url('record') }}" method="post">
        {!! csrf_field() !!}
        <label>品種</label></br>
        <input type="text" name="beetle_id" id="beetle_id" class="form-control"></br>
        <label>親代資訊</label></br>
        <input type="text" name="parents_info" id="parents_info" class="form-control"></br>
        <label>累代資訊</label></br>
        <input type="text" name="generations_info" id="generations_info" class="form-control"></br>
        <label>產地</label></br>
        <input type="text" name="origin" id="origin" class="form-control"></br>
        <label>狀態</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <label>食材</label></br>
        <input type="text" name="food" id="food" class="form-control"></br>
        <label>更換週期</label></br>
        <input type="text" name="change_cycle" id="change_cycle" class="form-control"></br>
        <label>飼養溫度</label></br>
        <input type="text" name="temperature" id="temperature" class="form-control"></br>
        <label>來源</label></br>
        <input type="text" name="source" id="source" class="form-control"></br>
        <input type="submit" value="儲存" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop