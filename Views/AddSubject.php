<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Application Forms<h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <form action="/SubjectAdded" method="POST">
                <input type="hidden" class="form-control" name="ClassId" value="<?=$ClassId?>">
                        <div id="repeater">
                            <i class="fas fa-plus float-right repeater-add-btn"></i>
                            <!-- Repeater Items -->
                            <div class="items">
                                <!-- Repeater Content -->
                                <div class="item-content">
                                        <div class="form-group">
                                            <label>Subject Name</label>
                                            <input type="text" class="form-control" data-name="SName">
                                        </div>
                                    <!-- Repeater Remove Btn -->
                                    <i class="fas fa-minus text-danger float-right remove-btn"></i>
                                </div>
                            </div>  
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