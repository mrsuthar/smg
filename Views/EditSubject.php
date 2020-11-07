<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Update Subject Name<h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Update Subject</li>
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
                <h3 class="card-title">Update Subject</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="/UpdateSubject" method="POST">
                    <div class="form-group">
                        <label>Subject Name</label>
                        <input type="hidden" class="form-control" name="SubjectId" value="<?=$SubjectId?>">
                        <input type="hidden" class="form-control" name="ClassId" value="<?=$ClassId?>">
                        <input type="text" class="form-control" name="SName" value="<?=$SubjectName?>">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                </form>
            </div>
            <!-- /.card -->
            <!-- /.container-fluid -->
        </div>
    </div>
</section>
<!-- /.content -->