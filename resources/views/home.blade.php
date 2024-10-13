<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Congrats you're logged in</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
    </form>
    
    <div style="border: 3px solid black;"> 
        <h1>POSTS</h1>
        <form action="/post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="post title ">
        <textarea name="body" placeholder="body content...."></textarea>
        <button>Save Post</button>
        </form>
    </div>
    <div>
        @foreach ($posts as $post)
        <div style="background-color:grey;">
            <h1>{{$post['title']}} by {{$post->user->name}} at {{$post['created_at']}}</h1>    
            <h3>{{$post['body']}}</h3>
            <p><a href="/post/{{$post->id}}">Edit</a></p>
            <form action="/post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
            </form>
        </div>    
        @endforeach
    </div>
    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        
        <form action="/register" method="post">
        @csrf    
        <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
        @csrf
        <input type="text" name="loginname" placeholder="name">
        <input type="password" name="loginpassword" placeholder="password">
        <button>Login</button>
        </form>
    </div>
    @endauth


</body>
</html>