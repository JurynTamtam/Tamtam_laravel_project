<form action="{{ url('/authentication') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif

</form>
