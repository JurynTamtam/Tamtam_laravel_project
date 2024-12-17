<form action="{{ url('/register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
     
   
    <button type="submit">Register</button>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
