<?php if(isset($_SESSION['alert'])) echo "<script>alert('".$_SESSION['alert']."')</script>"; unset($_SESSION['alert']);?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Student's Detail's<h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Students</li>
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
                <h3 class="card-title">Student with their Class</h3><a href="/AddStudent" class="btn-sm btn-success float-right">Add Student</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Addmission Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($data as $row) { ?>

                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?= $row->Name ?></td>
                                    <td><?= $row->Gender ?></td>
                                    <td><?= $row->Mobile ?></td>
                                    <td><?= $row->Email ?></td>
                                    <td><?= $row->ClassName ?></td>
                                    <td><?= $row->CreatedDate ?></td>
                                    <td>
                                        <a href="/EditStudent?UserId=<?=$row->UserId ?>">
                                            <i class="far fa-edit text-primary"></i>
                                        </a> | 
                                        <a onclick="return confirm('This will Delete the Student Record!!');" href="/DeleteStudent?UserId=<?= $row->UserId ?>">
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