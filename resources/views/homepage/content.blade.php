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
