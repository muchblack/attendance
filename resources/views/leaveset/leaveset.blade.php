@extends('layouts.default')

@section('content')
    <button type="button" class="btn btn-primary" onclick="add_new()">新增假別</button>
    @if(session('status'))
        <div class="alert alert-warning" role="alert">
            {{session('status')}}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>假別一覽表</div>
        <div class="card-body">
            <div class="table-responsive">
                @if($leavesets)
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th align="center">假別</th>
                            <th align="center">是否需要主管簽核</th>
                            <th align="center">是否需要證明</th>
                            <th align="center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leavesets as $item)
                            <tr>
                                <td align="center">{{$item['leave_name']}}</td>
                                <td align="center">{{$item['is_signoff_show']}}</td>
                                <td align="center">{{$item['is_prove_show']}}</td>
                                <td align="center">
                                    <button type="button" class="btn btn-primary" onclick="modify({{$item['idx']}})">編輯</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    請新增假別
                @endif

                <form action="delete" method="POST">
                    @csrf
                    <input type="hidden" name="delete_idx">
                </form>
            </div>
        </div>
    </div>
    <script>
        function add_new()
        {
            window.location = 'leave_set/add'
        }

        function modify(idx)
        {
            window.location = 'leave_set/modify/'+idx
        }
    </script>
@endsection
