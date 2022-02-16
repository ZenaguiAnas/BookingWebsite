

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Booking Admin</title>
  @include("admin.admincss");
</head>
<body>

  
    <!-- partial -->
    
    @include("admin.navbar");
    <div style="position:relative; top:-500px; right : -430px">
    <form action="/aploadvilla" method="post" enctype="mutipart/form-data">
        @csrf
        <div>
            <label >Title</label>
            <input type="text" name="title" placeholder="title" required>
        </div>
        <div>
            <label >Price</label>
            <input type="number" name="price" placeholder="price" required>
        </div>
        <div>
            <label >Image</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="description" required>
        </div>
        <div>
           
            <input style="color:black;" type="submit" value="Save">
        </div>
    </form>
</div>
      <!-- partial -->
      
                         
                    
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © N-Booking 2022</span>
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include("admin.adminscript");
  
</body>

</html>