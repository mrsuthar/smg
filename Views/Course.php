<?php if(isset($_SESSION['alert'])) echo "<script>alert('".$_SESSION['alert']."')</script>"; unset($_SESSION['alert']);?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Classes<h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Classes</li>
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
                <h3 class="card-title">Class Details</h3>
                <a href="/AddCourse" class="btn-sm btn-success float-right">Add Course</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($data as $row) { ?>
                                <tr>
                                    <td><?= $i;?></td>
                                    <td><a href="/Subject?ClassId=<?= $row->ClassId;?>"><b><?= $row->ClassName?></b></a></td>
                                    <td>
                                        <a href="/EditCourse?ClassId=<?= $row->ClassId;?>">
                                            <i class="far fa-edit text-primary"></i>
                                        </a> | 
                                        <a onclick="return confirm('This will Delete the Desired Class!!');" href="/DeleteCourse?ClassId=<?=$row->ClassId?>">
                                            <i class="far fa-trash-alt text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            $i++;}
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
</section>
<!-- /.content -->