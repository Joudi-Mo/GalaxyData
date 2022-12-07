<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <script src="https://kit.fontawesome.com/3f5b3fe9f7.js" crossorigin="anonymous"></script>
    <title>Users</title>
</head>

<body>
    @include('header')
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>created at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @unless(count($users) == 0)
                @foreach($users as $user)
                <tr>
                    <td data-label="id">{{$user->id}}</td>
                    <td data-label="firstname">{{$user->name}}</td>
                    <td data-label="lastname">{{$user->email}}</td>
                    <td data-label="email">{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                    <td data-label="verwijder">
                        <form action="/user/{{$user->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="deleteknop"><i class="fa-solid fa-trash"></i></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
                @else
                <p>no words found, be the first one to make it</p>
                @endunless
            </tbody>
        </table>
    </div>
</body>

</html>