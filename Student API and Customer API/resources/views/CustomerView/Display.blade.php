<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">>

<div class="container">
    <div class="content">
        <h1>Customer Display page</h1>
        <div class="table-responsive">
            <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
                <thead class="table-light">

                </thead>
                <tbody class="table-group-divider">
                    <tr class="table-primary">
                        <td scope="row">SID</td>
                        <td>{{$c->ID }}</td>

                    </tr>
                    <tr class="table-secondary">

                        <td scope="row">CustomerName</td>
                        <td>{{$c->CustomerName}}</td>

                    </tr>
                    <tr class="table-info">
                        <td scope="row">Gender</td>
                        <td>{{$c->Gender }}</td>

                    </tr>
                    <tr class="table-info">
                        <td scope="row">Tell</td>
                        <td>{{$c->Tell }}</td>

                    </tr>
                    <tr class="table-info">
                        <td scope="row">Email</td>
                        <td>{{$c->Email }}</td>

                    </tr>
                    <tr class="table-info">
                        <td scope="row">Nationality</td>
                        <td>{{$c->Nationality }}</td>

                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
        <a name="" id="" class="btn btn-primary btn-lg" href="{{ route("cu.index") }}" role="button">back</a>
    </div>

</div>
