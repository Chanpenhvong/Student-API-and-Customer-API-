  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet"    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">>
<div class="container">
    <div class="content">
<h1>Student front page</h1>



<table class="table table-secondary">
    <thead>

        <th>SID</th>
        <th>Name</th>
        <th>Tell</th>
        <th>Action</th>

    </thead>
    <tbody>
        @foreach ($data as $x )
        <tr>
        <td>{{ $x->sid }}</td>
        <td>{{ $x->name }}</td>
        <td>{{ $x->tell }}</td>
        <td>
            <div class="col">
            <form action="{{ route("stu.destroy",$x->sid) }}" method="post">
                @csrf // protected
                @method("DELETE") // call method delete
            <a class="btn btn-info btn-sm"href="{{ route("stu.show",$x->sid) }}">view</a>
            <a class="btn btn-secondary btn-sm" href="{{ route("stu.edit",$x->sid) }}">Edit</a>
            <button type="submit" class=" btn-danger btn-sm">Delete </button>
</form>



        </div>
        </td>
        </tr>

        @endforeach
    </tbody>

</table>
<div>
    <thead>
        <center>
            <a

    class="btn btn-primary"
    href="{{ route("stu.create") }}"
    role="button"
    >NEW</a
>
        </center>
      
    </thead>
</div>
    </div>
    </div>





































