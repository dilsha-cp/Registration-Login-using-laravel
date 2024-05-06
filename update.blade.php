<form action="{{ route('UpdateRecord') }}" method="POST" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
    @csrf
    <input type="hidden" name="id" value="{{ $student->id }}">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $student->name }}" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="{{ $student->email }}" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="{{ $student->address }}" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Password" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
    <a href="{{ route('Home') }}" style="background-color: #333; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; margin-left: 10px;">Back to homepage</a>
</form>
