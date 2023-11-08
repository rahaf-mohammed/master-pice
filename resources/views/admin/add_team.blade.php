<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <style type="text/css">
     label{

        display: inline-block;
        width: 200px;
     }
    


   </style>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')  
      <!-- partial -->
          @include('admin.navbar')   
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
       

          
    


        <div class="container"  align="center" style="padding-top: 100px;"> 

        @if(session()->has('message'))
           <div class="alert alert-sucess">
            
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
              {{session()->get('message')}}

           </div>



          @endif

        <form action="{{url('upload_team')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="padding:15px;">
                <label>Team Name</label>
                <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">

            </div>

            <div style="padding:15px;">
                <label>phone</label>
                <input type="number" style="color:black;" name="number" placeholder="Write the number">

            </div>

            <div style="padding:15px;">
                <label>speciality</label>
               <select name="specialty"style="color:black; width: 200px;" required="">
               <option >--select--</option>
                 <option value="facial therapy">facial therapy</option>
                 <option value="skin care">skin care</option>
                 <option value="steam bath">steam bath</option>
                 <option value="maskingface">maskingface</option>
                 <option value="body massage">body massage</option>
                 <option value="stone therapy">stone therapy</option>
                 
                    
                 



               </select>

            </div>

            
            <div style="padding:15px;">
                <label>Team image</label>
                <input type="file" name="file">               

            </div>

            <div style="padding:15px;">
                
                <input type="submit" class="btn btn-success">               

            </div>
        


        </form>
            
        



        </div>

        </div>
    <!-- plugins:js -->
         @include('admin.script')
  </body>
</html>