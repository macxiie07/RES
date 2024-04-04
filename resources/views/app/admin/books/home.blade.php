@extends('adminlte::page')

@section('title', 'Archives')

@section('content_header')
    <h1>Archives</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header" > 
        <div class="card-tools">
                <a href="{{route('admin.books.create')}}" class="btn btn-primary form-control float-right">Add New</a>
         </div>
        <h3 class="card-title">Archived List</h3>
    </div>
          
    <div class="card-body scrollable-card">
    <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped table-nowrap">

              <thead>
                <tr>
                                      <th style="width: 10px">ID</th>
                                      <th>Authors</th>
                                      <th>Title</th>
                                      <th>Abstract</th>
                                      <th style="width: 100px">File-URL</th>
                                      <th>Category</th>
                                      <th style="width: 100px">Action</th>
                                  </tr>
              </thead>
                            <tbody>
                                @foreach($book as $book)
                                    <tr>
                                        <td>{{$book->id}}</td>
                                        <td>{{substr($book->author->Authors,0,20)}}...</td>
                                        <td>{{substr($book->title, 0, 30)}}...</td>
                                        <td>{{substr($book->abstract, 0, 30)}}...</td>
                                        <td><a href="{{$book->file_url}}" target="_blank">{{$book->file_url}}</a></td>
                                        <td>{{$book->category->research_type}},{{$book->category->strand}},{{$book->category->level}}</td>
                                        <td>      
                                        <form method="post" action="{{route('app.admin.books.destroy', $book)}}"> 
                                            <a href="{{ route('admin.books.show', ['book' =>$book->id])}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>&nbsp;
                                            
                                                @csrf 
                                              @method('delete')
                                        <button type="submit" onclick="return confirm('This will delete the entry!\nAre you sure?')" class="btn btn-danger btn-sm"> <span class="fas fa-trash"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
            </table>
    </div>
    </div>
</div>

@stop

@section('footer')
Copyright &copy; 2024. <strong>RES Admin</strong>. All rights reserved.
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    
@stop