@extends('layouts.app')

@section('content')
<h1 class="mb-4">新規シフト作成</h1>

<form action="{{ route('shifts.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">名前</label>
        <input type="text" name="name" id="name" class="form-control" required>
        <div class="invalid-feedback">
            名前を入力してください。
        </div>
    </div>

    <div class="mb-3">
        <label for="shift_date" class="form-label">日付</label>
        <input type="date" name="shift_date" id="shift_date" class="form-control" required>
        <div class="invalid-feedback">
            日付を入力してください。
        </div>
    </div>

    <div class="mb-3">
        <label for="start_time" class="form-label">開始時間</label>
        <input type="time" name="start_time" id="start_time" class="form-control" required>
        <div class="invalid-feedback">
            開始時間を入力してください。
        </div>
    </div>

    <div class="mb-3">
        <label for="end_time" class="form-label">終了時間</label>
        <input type="time" name="end_time" id="end_time" class="form-control" required>
        <div class="invalid-feedback">
            終了時間を入力してください。
        </div>
    </div>

    <button type="submit" class="btn btn-primary">作成</button>
</form>
@endsection
