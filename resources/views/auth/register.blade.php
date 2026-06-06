<x-auth-layout>
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="/register" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="password" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="password_confirmation" placeholder="Password Confirmation" class="form-control">
        </div>
        <button type="submit">Register</button>
    </form>
</x-auth-layout>