@extends('homepage.template');

@section('pageTitle')
    Home
@endsection


@section('pageContent')
</nav>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark">Welcome to RES Website!</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <p>
                “RES” stands for Research E-Archiving System.
                It refers to a suite of software that organizations
                use to manage internal HR functions. From employee data
                management to payroll, recruitment, benefits, training,
                talent management, employee engagement, and employee
                attendance, HRMS software helps HR professionals manage
                the modern workforce. Also called
                a human resources information system (HRIS), HRMS
                systems put information about a company's most
                valuable assets in front of the people who need them.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


@section('pageBody')
<div class="container-fluid bg-1 text-center">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10%">ID</th>
                        <th>Name</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <form method="post" action="#"> 
                                <a href="#" class="btn btn-warning btn-sm">Modify <span class="fas fa-edit"></span></a>
                           
                                @csrf 
                                @method('delete')
                            <button type="submit" onclick="return confirm('This will delete the entry!\nAre you sure?')" class="btn btn-danger btn-sm">Delete <span class="fas fa-trash"></span></a>
                            </form>
                        </td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection