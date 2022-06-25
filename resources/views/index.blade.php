
   @include('header')

    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
              <div class="card rounded-3">
                <div class="card-body p-4">
      
                  <h4 class="text-center my-3 pb-3">To Do App</h4>
      
                  <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" method="POST" action="">
                    @csrf
                    <div class="col-12">
                      <div class="form-outline">
                        <input type="text" name="task" id="form1" class="form-control" />
                        <label class="form-label" for="form1">Enter a task here</label>
                      </div>
                    </div>
      
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
      
                  </form>

                  @if(session()->has('message'))
                  <div class="alert alert-success">
                      {{ session()->get('message') }}
                  </div>
                  @endif
      
                  <table class="table mb-4">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Todo item</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            
                      <tr>
                        <th scope="row">{{$task->id}}</th>
                        <td>{{$task->task}}</td>
                        <td>
                          <a href="{{url('/edit',$task->id)}}" class="btn btn-info btn-sm">Edit</a>
                          <a href="{{url('/delete',$task->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

      <script src="js/bootstrap.bundle.css"></script>

</body>
</html>