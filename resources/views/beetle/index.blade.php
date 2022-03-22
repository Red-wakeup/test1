@extends('beetle.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">甲蟲列表頁</div>
                    <div class="card-body">
                        <a href="{{ url('/beetle/create') }}" class="btn btn-success btn-sm" title="Add New Beetle">
                            <i class="fa fa-plus" aria-hidden="true"></i> 新增
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>品種</th>
                                        <th>名稱</th>
                                        <th>學名</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($beetle as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->variety }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->scientific_name }}</td>
 
                                        <td>
                                            <a href="{{ url('/beetle/' . $item->id) }}" title="View Beetle"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> 明細</button></a>
                                            <a href="{{ url('/beetle/' . $item->id . '/edit') }}" title="Edit Beetle"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 編輯</button></a>
 
                                            <form method="POST" action="{{ url('/beetle' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Beetle" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> 刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection