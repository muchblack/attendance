@extends('layouts.default')

@section('content')
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>新增請假類別</div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="add">
                    @csrf
                    <div class="form-group">
                        <label>假別名稱</label>
                        <input type="text" class="form-control" name="leave_name">
                    </div>
                    <div class="form-group">
                        <label>是否需要簽核</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_signoff" id="is_signoff" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                需要主管簽核
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_signoff" id="is_signoff" value="0" >
                            <label class="form-check-label" for="exampleRadios1">
                                不需要主管簽核
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>是否需要證明</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_prove" id="is_prove" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                需要提出證明
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_prove" id="is_prove" value="0" >
                            <label class="form-check-label" for="exampleRadios1">
                                不需要提出證明
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">送出</button>
                </form>
            </div>
        </div>
    </div>
@endsection
