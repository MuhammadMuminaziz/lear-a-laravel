<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>User</h1>

                <ul class="list-group">
                    @foreach($users as $index => $user)
                    <li class="list-group-item">
                        <a href="{{ route('users.show', $user) }}">{{ $index + 1 }}. {{ $user->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
