@extends('admin.layouts.template')

@section('content')


<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">User</h3>
    </div>
    <div>
      <a class="btn btn-success" href="{{ url('user/create') }}">Create New User</a>
    </div>
    <div class="alert alert-danger" id="message" style="display:none;">
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      @csrf
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>FULL NAME</th>
            <th>USER NAME</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>ACTION</th>
          </tr>
          @foreach($users as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->fullname }}</td>
              <td>{{ $item->username }}</td>
              <td>{{ $item->address }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->phone }}</td>
              <td>
                <a href="{{ route('user.edit', $item) }}" class="btn btn-primary">Edit</a>
                <a href="javascript:void(0)" onclick="deleteRecord({{ $item->id }})" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
@endsection
<!-- /.content -->
@section('page_script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script>
function deleteRecord(id) {
  if (confirm("Do you really want to delete this record")) {
    var obj = {};
    obj.id = id;
    obj._method = "delete";
    obj._token = $("input[name='_token']").val();
    $.ajax({
      url: 'user/destroy/' + id,
      method: "post",
      data: obj,
      success: function(response) {
        if (response.indexOf('Success') >=0) {
          alert("Deleted success");
          location.reload();
        } else {
          alert("Deleted not success");
        }
      }
    });
  }
}
</script>
@endsection

