<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1> Change new student </h1>
<div class="container">
    <div class="content">
        <form action="{{ route("cu.update",$citem->ID) }}" method="post">
            @csrf
            @method("PUT")
            <div class="table-responsive">
                <table class="table table-primary">
                    <body>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">CustomerName</label>
                                <input type="text" class="form-control" name="CustomerName" id="CustomerName" aria-describedby="helpId" placeholder="Enter Tel" value="{{$citem->CustomerName}}" />
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Gender</label>
                                <input type="text" class="form-control" name="Gender" id="Gender" aria-describedby="helpId" placeholder="Enter Tel" value="{{$citem->Gender}}" />
                            </div>


                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Tell</label>
                                <input type="text" class="form-control" name="Tell" id="Tell" aria-describedby="helpId" placeholder="Enter Tel" value="{{$citem->Tell}}" />
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" name="Email" id="Email" aria-describedby="helpId" placeholder="Enter Tel" value="{{$citem->Email}}" />
                            </div>
                        </tr>
                        <div class="mb-3">
                            <label for="" class="form-label">Nationality</label>
                            <input type="text" class="form-control" name="Nationality" id="Nationlity" aria-describedby="helpId" placeholder="Enter Tel" value="{{$citem->Nationality}}" />
                        </div>
                        <tr>


            </div>
            </tbody>


            </table>
    </div>
    <center>
        <div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </center>
    <div>

            <a name="" id="" class="btn btn-primary" href="{{ Route("cu.index") }}" role="button">Back</a>


    </div>
    </form>

</div>

</div>
