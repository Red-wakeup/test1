@extends('record.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">甲蟲紀錄</div>
  <div class="card-body">
    <a href="{{ url('/record') }}" class="btn btn-success btn-sm" title="Home Page">
      <i class="fa fa-plus" aria-hidden="true"></i> 返回列表
    </a>
    <a href="{{ url('/record/' . $record->id . '/edit') }}" class="btn btn-success btn-sm" title="Edit Record">
      <i class="fa fa-plus" aria-hidden="true"></i> 編輯
    </a>
    <br/>
    <br/>
        <div class="card-body">
          <h5 class="card-text">品種 : {{ $record->beetle_id }}</h5>
          <p class="card-text">親代資訊 : {{ $record->parents_info }}</p>
          <p class="card-text">累代資訊 : {{ $record->generations_info }}</p>
          <p class="card-text">產地 : {{ $record->origin }}</p>
          <p class="card-text">狀態 : {{ $record->status }}</p>
          <p class="card-text">食材 : {{ $record->food }}</p>
          <p class="card-text">更換週期 : {{ $record->change_cycle }}</p>
          <p class="card-text">飼養溫度 : {{ $record->temperature }}</p>
          <p class="card-text">來源 : {{ $record->source }}</p>
  </div>
       
    </hr>
  
  </div>
</div>