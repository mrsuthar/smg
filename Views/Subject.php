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
                    <li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item"><a href="/Course">Class</a></li>
                    <li class="breadcrumb-item active">Subject</li>
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
                <h3 class="card-title"><?=$ClassName;?> Subject Details</h3><a href="/AddSubject?ClassId=<?=$ClassId?>" class="btn-sm btn-success float-right">Add Subject</a>
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
                                    <td><?= $i; ?></td>
                                    <td><b><?= $row->SubjectName?></b></a></td>
                                    <td>
                                        <a href="/EditSubject?ClassId=<?=$ClassId?>&SubjectId=<?=$row->SubjectId?>">
                                            <i class="far fa-edit text-primary"></i>
                                        </a> | 
                                        <a onclick="return confirm('This will Delete the Desired Subject!!');" href="/DeleteSubject?ClassId=<?=$ClassId?>&SubjectId=<?=$row->SubjectId?>">
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