<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Http\Requests\ShiftRequest;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all();
        return view('shifts.index', compact('shifts'));
    }

    public function create()
    {
        return view('shifts.create');
    }

    public function store(ShiftRequest $request)
    {
        Shift::create($request->validated());
        return redirect()->route('shifts.index')->with('success', 'シフトを登録しました');
    }

    public function show(Shift $shift)
    {
        return view('shifts.show', compact('shift'));
    }

    public function edit(Shift $shift)
    {
        return view('shifts.edit', compact('shift'));
    }

    public function update(ShiftRequest $request, Shift $shift)
    {
        $shift->update($request->validated());
        return redirect()->route('shifts.index')->with('success', 'シフトを更新しました');
    }

    public function destroy(Shift $shift)
    {
        $shift->delete();
        return redirect()->route('shifts.index');
    }
}
