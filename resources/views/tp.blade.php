<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    @if(count($posts) > 0)
    <table border="2">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->First_Name }}</td>
                <td>{{ $post->Last_Name }}</td>
                <td>{{ $post->Email_Address }}</td>
            </tr>
        @endforeach
    </table>
    @else
        <p>No posts found.</p>
    @endif
</body>
</html>
