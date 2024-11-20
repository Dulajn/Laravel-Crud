
           <h1>Update Student Record</h1>
              <form action="/update" method="post">
                    @csrf
                    <input type="text" name="id" value="{{$data['id']}}"  placeholder="Enter Name">
                    <br><br>

                    <input type="text" name="Name" value="{{$data['Name']}}"  placeholder="Enter Password">
                    <br><br>

                    <input type="text" name="password" value="{{$data['password']}}"  placeholder="Enter Date">
                    <br><br>


                    <input type="text" name="Date" value="{{$data['Date']}}"  placeholder="Enter Date">
                    <br><br>


              

                    <button class="btn btn-primary" type="submit">update</a></button>



                </form>

                <button class="btn btn-primary" ><a href="/crud">Back</a></button>
                    