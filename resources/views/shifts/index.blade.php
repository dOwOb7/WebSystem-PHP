@extends('layouts.app')

@section('content')
<h1 class="mb-4">シフト一覧</h1>
<a href="{{ route('shifts.create') }}" class="btn btn-primary mb-3">新規シフトを追加</a>
<h2>こんにちは！Hello</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>名前</th>
            <th>日付</th>
            <th>開始時間</th>
            <th>終了時間</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shifts as $shift)
        <tr>
            <td>{{ $shift->name }}</td>
            <td>{{ $shift->shift_date }}</td>
            <td>{{ $shift->start_time }}</td>
            <td>{{ $shift->end_time }}</td>
            <td>
                <a href="{{ route('shifts.edit', $shift->id) }}" class="btn btn-sm btn-warning">編集</a>
                <form action="{{ route('shifts.destroy', $shift->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

