<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Update Student Detail's<h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Student Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="/UpdateStudent" method="POST">
                <?php foreach($data as $row) {?>
                    <input type="hidden" name="UserId" class="form-control" value="<?=$row->UserId?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Name</label>
                                <input type="text" name="SName" class="form-control" value="<?=$row->Name?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Gender</label>
                                <input type="text" name="SGender" class="form-control" value="<?=$row->Gender?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Date of Birth</label>
                                <input type="date" name="SDOB" class="form-control" value="<?=$row->DOB?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Mobile</label>
                                <input type="text" name="SMobile" class="form-control" value="<?=$row->Mobile?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Email</label>
                                <input type="text" name="SEmail" class="form-control" value="<?=$row->Email?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Address</label>
                                <input type="text" name="SAddress" class="form-control" value="<?=$row->Address?>">
                            </div>
                        </div>
                    </div>
                                    <?php }?>
                    <input type="submit" class="btn btn-primary" value="Update" name="submit">
                </form>
            </div>
            <!-- /.card -->
            <!-- /.container-fluid -->
        </div>
    </div>
</section>
<!-- /.content -->