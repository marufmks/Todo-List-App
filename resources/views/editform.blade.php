
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
                   @method('PUT')
                   <div class="col-12">
                     <div class="form-outline">
                       <input type="text" name="task" value="{{$task->task}}" id="form1" class="form-control" />
                       <label class="form-label" for="form1">Edit a task here</label>
                     </div>
                   </div>
     
                   <div class="col-12">
                     <button type="submit" class="btn btn-primary">Save</button>
                   </div>
     
                 </form>

             
     
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     

     <script src="js/bootstrap.bundle.css"></script>

</body>
</html>