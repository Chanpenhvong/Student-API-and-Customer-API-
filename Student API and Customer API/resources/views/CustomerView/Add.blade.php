<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Add new student </h1>
<div class="container">
    <div class="content">
        <form action="{{ route("cu.store") }}" method="post">
            @csrf
            @method("POST")
            <div class="table-responsive">
                <table class="table table-primary">
                    <body>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="CustomerName" ID="CustomerName" gender="CustomerName" Tell="CustomerName" Email="CustomerName" Nationality="CustomerName" aria-describedat="HelpId" placeholder="EnterName">
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Gender</label>
                                <input type="text" class="form-control" name="Gender" ID="Gender" gender="Gender" Email="Gender" Nationality="Gender" aria-describedat="HelpId" placeholder="EnterGender">
                            </div>


                        </tr>
                        <tr>
                            <div class="mb-3">

                                <label for="" class="form-label">Tell</label>
                                <input type="text" class="form-control" name="Tell" ID="Tell" gender="Tell" Email="Tell" Nationality="Tell" aria-describedat="HelpId" placeholder="EnterTell">
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">

                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" name="Email" gender="Email" Tell="Email" Email="Email" Nationality="Email" aria-describedat="HelpId" placeholder="EnterEmail">

                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Nationality</label>
                                <input type="text" class="form-control" name="Nationality" ID="Nationality" gender="Nationality" Email="Nationality" Nationality="Nationality" aria-describedat="HelpId" placeholder="EnterNationality">
                        </tr>
            </div>
            </tbody>


            </table>
    </div>
    <center>
        <div>
            <button type="submit" class="btn btn-primary">SAVE</button></form>
        </div>
    </center>
    <div>
        <tr>


            <a name="" id="" class="btn btn-primary btn-lg " href="{{ route("cu.index") }}" role "button">back</a>
        </tr>
    </div>


</div>

</div>
