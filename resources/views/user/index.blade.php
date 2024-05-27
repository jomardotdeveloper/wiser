@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="border-bottom title-part-padding">
          <h4 class="card-title mb-0">Users</h4>
        </div>
        <div class="card-body">
          <h6 class="card-subtitle mb-3">
            This is the users screen. You can view all the users here.
          </h6>
          <div class="table-responsive">
            <table
            id="scroll_ver_dynamic_hei"
            class="table table-striped table-bordered display"
            style="width: 100%"
            >
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Remaining Time</th>
                  <th>Connected</th>
                  <th>Disposals</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->remaining_time_formatted }}</td>
                        <td>{{ "NO" }}</td>
                        <td>{{ "0"}}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                    <th>Full Name</th>
                    <th>Remaining Time</th>
                    <th>Connected</th>
                    <th>Disposals</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
