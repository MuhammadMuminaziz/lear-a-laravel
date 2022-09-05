<x-app-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create New Task</div>
                    <div class="card-body">
                        <form action="{{ route('task.store') }}" method="post">
                            @csrf
                            @include('tasks._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <ul class="list-group mt-2">
            @foreach($tasks as $index => $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{ $index + 1 }} - {{ $task->title }}
                <div class="d-flex">
                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-success me-1">edit</a>
                    <form action="{{ route('task.destroy', $task->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>