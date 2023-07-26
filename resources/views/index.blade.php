@extends('layouts.app')
@section('title', 'The list of tasks')
@section('content')
<nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="btn">Add New Task</a>
</nav>
<table border="2">
    @forelse ($tasks as $task)
        <tr>
          <td>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through' => $task->completed])>{{ $task->title }}</a>
          </td>
        </tr>
        <tr>
          @empty
            <div>There are no tasks!</div>
        </tr>
    @endforelse
</table>
  

  @if($tasks->count())
    <nav class="mt-4">
      {{ $tasks->links() }}
    </nav>
  @endif
@endsection