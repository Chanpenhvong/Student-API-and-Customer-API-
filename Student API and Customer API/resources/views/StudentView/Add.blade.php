<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet"    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




<h1>Add new student </h1>
<div class="container">
    <div class="content">
      <form action="{{ route("stu.store") }}" method="post">
        @csrf
        @method("POST")
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            ><body>
                <tr>
                   <div class="mb-3">
                    <label for=""class="form-label">Name</label>
                    <input type="text"
                    class="form-control"
                    name="name"
                    ID="name"
                    aria-describedat="HelpId"
                    placeholder="EnterName"

                    >
                   </div>
                </tr>
                <tr>
                    <div class="mb-3">
                        <label for=""class="form-label">Tell</label>
                        <input type="text"
                        class="form-control"
                        name="tell"
                        ID="tell"
                        aria-describedat="HelpId"
                        placeholder="EnterTell"

                        >
                       </div>

                </tr>
            </tbody>


            </table>
        </div>
        <center>
            <div>
                <button type="submit"class="btn btn-primary"><a href="{{ route("stu.index") }}"></a> SAVE</button>
            </div>
        </center>
<div>
    <tr>
        <a name=""id=""  class ="btn btn-primary btn-lg "  href="{{ route("stu.index") }}"role "button">back</a>
    </tr>
</div>


    </div></form>

</div>

