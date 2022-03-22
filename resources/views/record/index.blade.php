@extends('record.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">甲蟲紀錄</div>
                    <div class="card-body">
                        <a href="{{ url('/record/create') }}" class="btn btn-success btn-sm" title="Add New Record">
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
                                        <th>狀態</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($record as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->beetle_id }}</td>
                                        <td>{{ $item->status }}</td>
 
                                        <td>
                                            <a href="{{ url('/record/' . $item->id) }}" title="View Record"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> 明細</button></a>
                                            <a href="{{ url('/record/' . $item->id . '/edit') }}" title="Edit Record"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 編輯</button></a>
 
                                            <form method="POST" action="{{ url('/record' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Record" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> 刪除</button>
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