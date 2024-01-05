<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <div class="content">
        <h1>Change Student</h1>

        <form action="{{ route("stu.update", $item->sid)}}" method="post">

            @csrf
            @method("PUT")

            <div class="table-responsive">
                <table class="table table-primary">
                    <tbody>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id="name"
                                    aria-describedby="helpId"
                                    placeholder="Enter Name"
                                    value="{{$item->name}}"
                                />
                            </div>

                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">tell</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="tell"
                                    id="name"
                                    aria-describedby="helpId"
                                    placeholder="Enter Tel"
                                    value="{{$item->tell}}"
                                />
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>
<button type="submit" class="btn btn-primary" ><a href="{{ route("stu.index") }}"></a> Update </button>



            <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{ route("stu.index") }}"
                role="button"
                >Back</a
            >
</form>

    </div>



