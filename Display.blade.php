@if(isset($student))
    <div style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; margin-top: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
        <h1 style="color: #333; margin-bottom: 20px;">Record Found</h1>
        <hr style="border-top: 1px solid #ccc; margin-bottom: 20px;">
        <div style="margin-bottom: 10px;">
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>
            <p><strong>Address:</strong> {{ $student->address }}</p>
        </div>
        <div style="margin-top: 20px;">
            <a href="{{ route('UpdateForm', ['email' => $student->email]) }}" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Update Record</a>
            <a href="{{ route('DeleteForm', ['email' => $student->email]) }}" style="background-color: #f44336; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-left: 10px;">Delete Record</a>
            <a href="{{ route('Home') }}" style="background-color: #333; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-left: 10px;">Home</a>
        </div>
    </div>
@else
    <p>No record found</p>
@endif
