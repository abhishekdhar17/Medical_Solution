@extends('layouts.admin')

@section('content')
 <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Account Approval List</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Email ID</th>
                    <th>Image</th>
                    <th>Account Type</th>
                    <th>About</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Email ID</th>
                    <th>Image</th>
                    <th>Account Type</th>
                    <th>About</th>
                    <th>Status</th>
                  </tr>
                </tfoot>

                <tbody>
                  <tr>
                    <td>{{Auth::user() -> name}}</td>
                    <td>$results = DB::select('SELECT name FROM users',[1])</td>
                    <td>{{Auth::user() -> email}}</td>
                    <td>{{Auth::user() -> image}}</td>
                    <form method="POST">
                    <td>{{Auth::user() -> about}}</td>
                    <td>Approve / Decline</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                </tbody>
                
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">* Pending Accounts for approval</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>CopyRight Reserved by ADB AlgO</em>
        </p>

      </div>
@endsection