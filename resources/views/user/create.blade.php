<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<form method="post" action="{{ route('user.store') }}">
  @csrf
  <div class="row">
    <div class="col-6">
      <label>User Name</label>
      <input type="text" class="form-control" placeholder="User Name" name="username" value="">
    </div>
    <div class="col-6">
      <label>Full Name</label>
      <input type="text" class="form-control" placeholder="Full Name" name="fullname" value="">
    </div>
    <div class="col-6">
      <label>Address</label>
      <input type="text" class="form-control" placeholder="Address" name="address" value="">
    </div>
    <div class="col-6">
      <label>Email</label>
      <input type="text" class="form-control" placeholder="Email" name="email" value="">
    </div>
    <div class="col-6">
      <label>Phone</label>
      <input type="text" class="form-control" placeholder="Phone" name="phone" value="">
    </div>
    <div class="col-6">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password" value="">
    </div>
    <div class="col-6">
      <label>Confirm Password</label>
      <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" value="">
    </div>
    <div class="col-6">
      <label>Image</label>
      <input type="text" class="form-control" placeholder="Image" name="image" value="">
    </div>
    <div class="col-6">
      <label>Status</label>
      <input type="text" class="form-control" placeholder="Status" name="status" value="">
    </div>      
  </div>
  <div class="col-6">
    <input class="btn btn-success" type="submit" name="btnsubmit" value="Submit">
  </div>
</form>
