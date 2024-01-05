<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">>
<div class="container">
    <div class="content">
        <h1>Customer Front page</h1>


        <table class="table table-secondary">
            <thead>
                <th>ID</th>
                <th>CustomerName</th>
                <th>Gender</th>
                <th>Tell</th>
                <th>Email</th>
                <th>Nationlity</th>
                <th>Action</th>
            </thead>
            @foreach ($customer as $c )

            <tr>
                <td>{{ $c->ID }}</td>
                <td>{{ $c->CustomerName }}</td>
                <td>{{ $c->Gender }}</td>
                <td>{{ $c-> Tell}}</td>
                <td>{{$c-> Email }}</td>
                <td>{{$c->Nationality }}</td>
                <td>
                    <div class="coll">
                        <form action="{{route("cu.destroy",$c->ID)  }}" method="post">
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-info btn-sm" href="{{ route("cu.show",$c->ID) }}">view</a>
                            <a class="btn btn-secondary btn-sm" href="{{ route("cu.edit",$c->ID) }}">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>

                </td>
            </tr>

            @endforeach
        </table>
        <a class="btn btn-primary" href="{{ route("cu.create") }}" role="button">NEW</a>
        <br>
        <br>


    </div>
</div>
