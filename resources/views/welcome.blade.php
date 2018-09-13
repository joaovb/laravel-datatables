<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

        <title>Datatables com Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        
    </head>
    <body>
        <div class="container">
            <h1> Users </h1>
        <table class="table" id="users">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>E-mail</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td> {{ $user->id }}</td>
                <td> {{ $user->name }}</td>
                <td> {{ $user->email }}</td>
            
            </tr>
            @endforeach      
        
        </tbody>
                
        </table>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready( function () {
                $('#users').DataTable()({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "/api/users"
                   // "columns":[
                   //     {data: 'id'},
                   //     {data: 'name'},
                    //    {data: 'email'},
                   // ]
                });
            });
        </script>
    </body>
</html>
