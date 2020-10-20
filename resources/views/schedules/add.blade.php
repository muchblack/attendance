@extends('layouts.default')

@section('content')
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>新增班表</div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="add">
                    @csrf
                    <div class="form-group">
                        <label>班表名稱</label>
                        <input type="text" class="form-control" name="schedule_name">
                    </div>
                    <div class="form-group">
                        <label>表定上班時間</label>
                        <select name="work_start_hour">
                            @for($i=0;$i<24;$i++)
                                <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}">{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                            @endfor
                        </select>：
                        <select name="work_start_mins">
                            @for($i=0;$i<61;$i=$i+10)
                                <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}">{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label>表定下班時間</label>
                        <select name="work_end_hour">
                            @for($i=0;$i<24;$i++)
                                <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}">{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                            @endfor
                        </select>：
                        <select name="work_end_mins">
                            @for($i=0;$i<61;$i=$i+10)
                                <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}">{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label>隸屬部門</label>
                        <select name="dept_idx">
                            @foreach($depts as $item)
                                <option value="{{$item['idx']}}">{{$item['dept_name']}}</option>
                            @endforeach
                        </select>：
                    </div>
                    <div class="form-group">
                        <label>緩衝時間(單位：分)</label>
                        <input type="text" class="form-control" name="schedule_buffer" maxlength="2">
                    </div>
                    <button type="submit" class="btn btn-primary">送出</button>
                </form>
            </div>
        </div>
    </div>
@endsection
