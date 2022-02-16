

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
    <form action="/uploadhotel" method="post" enctype="mutipart/form-data">
        @csrf
        <div class="mb-3 w-50">
  <label  class="form-label">Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
</div>
<div class="mb-3 w-50">
  <label  class="form-label">Price</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Price">
</div>
<div class="mb-3 w-50">
  <label  class="form-label">Image</label>

  <input type="file"  name="image" ">
</div>
<div class="mb-3 w-50">
  <label class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div>
<input type="submit"  value="Save" class="form-control primery-btn w-50" id="exampleFormControlInput1"></form>
    
</form>
</div>
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