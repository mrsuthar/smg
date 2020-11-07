<?php if(isset($_SESSION['alert'])) echo "<script>alert('".$_SESSION['alert']."')</script>"; unset($_SESSION['alert']);?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Student's Grade Detail's<h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Grade">Grade</a></li>
                    <li class="breadcrumb-item active">Result</li>
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
                <h3 class="card-title">Student with their Class</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Mark's</th>
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($data as $row) { ?>
                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?= $row->SubjectName ?></td>
                                    <td><?= $row->Grade ?></td>
                                    <td><?php if($row->Grade>50){echo "Passed";}else { echo "Failed";} ?></td>
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