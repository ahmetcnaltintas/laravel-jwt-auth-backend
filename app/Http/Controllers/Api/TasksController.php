<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tasks;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'priority' => 'required|in:low,high',
            'due_date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $user_id = Auth::id();

        $task = Tasks::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'due_date' => $request->due_date,
        ]);

        if ($task) {
            return response()->json(['success' => 'Görev Başarıyla Eklendi!'], 200);
        } else {
            return response()->json(['error' => 'Görev Eklenirken Hata Oluştu'], 500);
        }
    }
    public function show()
    {
        $tasks = Tasks::where('user_id', auth()->id())->get();

        return response()->json($tasks, 200);
    }
    public function edit(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'priority' => 'required|in:low,high',
            'due_date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        try {
            $task = Tasks::findOrFail($id);

            $task->title = $request->input('title');
            $task->priority = $request->input('priority');
            $task->due_date = $request->input('due_date');
            $task->save();

            return response()->json(['success' => 'Görev başarıyla güncellendi!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Görev güncellenirken bir hata oluştu', 'details' => $e->getMessage()], 500);
        }
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
}
