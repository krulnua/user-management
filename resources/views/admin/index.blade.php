<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Management</title>
</head>
<body>
<div class="container mt-5">
    <h2>Admin Management</h2>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" class="mb-4">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

    <a href="{{ route('admin.create') }}" class="btn btn-success mb-3">Add Admin</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->username }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                    <a href="{{ route('admin.edit', $admin) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.destroy', $admin) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
