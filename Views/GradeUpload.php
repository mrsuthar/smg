<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Grade Upload<h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/Grade">Grade</a></li>
                    <li class="breadcrumb-item"><a href="/AddGrade">Add Grade</a></li>
                    <li class="breadcrumb-item active">Approved</li>
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
                <h3 class="card-title">Approved Application</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="/GradeUploaded" method="POST">
                <input type="hidden" name="StudentId" value="<?=$StudentId?>">
                    <div class="row">
                        <?php foreach($result as $row) {?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?=$row->SubjectName?></label>
                                <input type="number" name="Grade[]" class="form-control">
                                <input type="hidden" name="SubjectId[]" class="form-control" value="<?=$row->SubjectId?>">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
</section>
<!-- /.content -->