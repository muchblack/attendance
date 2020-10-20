@extends('layouts.default')

@section('content')
    <button type="button" class="btn btn-primary" onclick="add_new()">新增班表</button>
        @if(session('status'))
            <div class="alert alert-warning" role="alert">
                {{session('status')}}
            </div>
        @endif
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>班表一覽表</div>
        <div class="card-body">
            <div class="table-responsive">
                @if($schedules)
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th align="center">班表名稱</th>
                            <th align="center">表定上班時間</th>
                            <th align="center">表定下班時間</th>
                            <th align="center">緩衝時間</th>
                            <th align="center">部門</th>
                            <th align="center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($schedules as $item)
                            <tr>
                                <td align="center">{{$item['schedule_name']}}</td>
                                <td align="center">{{$item['schedule_start']}}</td>
                                <td align="center">{{$item['schedule_end']}}</td>
                                <td align="center">{{$item['schedule_buffer']}}</td>
                                <td align="center">{{$item['dept_name']}}</td>
                                <td align="center">
                                    <button type="button" class="btn btn-primary" onclick="modify({{$item['id']}})">編輯</button>
                                    <button type="button" class="btn btn-danger" onclick="delete_sch({{$item['id']}})">刪除</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    請新增班表
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
            window.location = 'schedules/add'
        }

        function modify(idx)
        {
            window.location = 'schedules/modify/'+idx
        }
        function delete_sch(idx)
        {
            window.location = 'schedules/delete/'+idx
        }
    </script>
@endsection
