<form action="{{ route('login') }}" method="post">
    @csrf
    <label for="">
        <input type="email" name="email" id="" placeholder="Email ...">
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </label>

    <label for="">
        <input type="password" name="password" id="" placeholder="Password">
        @error('password')
            <div>{{ $message }}</div>
        @enderror
    </label>

    <input type="submit" value="Login">
</form>