@extends('beetle.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">甲蟲明細頁</div>
  <div class="card-body">
    <a href="{{ url('/beetle') }}" class="btn btn-success btn-sm" title="Home Page">
      <i class="fa fa-plus" aria-hidden="true"></i> 返回列表
    </a>
    <a href="{{ url('/beetle/' . $beetle->id . '/edit') }}" class="btn btn-success btn-sm" title="Edit Beetle">
      <i class="fa fa-plus" aria-hidden="true"></i> 編輯
    </a>
    <br/>
    <br/>
        <div class="card-body">
          <h5 class="card-title">名稱 : {{ $beetle->name }}</h5>
          <p class="card-text">學名 : {{ $beetle->scientific_name }}</p>
          <p class="card-text">品種 : {{ $beetle->variety }}</p>
          <p class="card-text">幼蟲期 : {{ $beetle->larval_stage }}</p>
          <p class="card-text">成蟲壽命 : {{ $beetle->insect_life }}</p>
  </div>
       
    </hr>
  
  </div>
</div>