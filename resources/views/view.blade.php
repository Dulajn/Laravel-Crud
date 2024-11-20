
<h1> Student Report</h1>
              <form action="/view" method="post">
                    @csrf
                    <input type="text" disabled name="id" value="{{$data['id']}}"  placeholder="Enter Name">
                    <br><br>

                    <input type="text" disabled name="Name" value="{{$data['Name']}}"  placeholder="Enter Password">
                    <br><br>

                    <input type="text" disabled name="password" value="{{$data['password']}}"  placeholder="Enter Date">
                    <br><br>


                    <input type="text" disabled name="Date" value="{{$data['Date']}}"  placeholder="Enter Date">
                    <br><br>

                   


                </form>

                <button class="btn btn-primary" ><a href="/crud">Back</a></button>
                    