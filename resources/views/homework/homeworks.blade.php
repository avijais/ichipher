@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Homeworks
    <!-- <small>Listing</small> -->
  </h1>
    <!-- <ol class="breadcrumb"> -->
    <!-- <li><a href="javascript:void(0);" class="btn btn-warning"><i class="fa fa-dashboard"></i> Add Home Work</a></li> -->
    <!-- <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li> -->
    <!-- <li><a href="#">Tables</a></li> -->
    <!-- <li class="active">Homeworks</li> -->
  <!-- </ol>  -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="row">
            <div class="col-xs-6">
              <!-- <h3 class="box-title">Home Works</h3> -->
            </div>
            <div class="col-xs-6">
                <div class="pull-right">
                    <a class="btn btn-success"><i class="fa fa-plus"> Add Home Work</i></a>
                </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Class</th>
              <th>Section</th>
              <th>Subject</th>
              <th>Title</th>
              <th>Description</th>
              <th>Given By</th>
              <th>Added At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach ($homeworks as $homework) { ?>
                <tr>
                  <td><?=$homework['standard']['roman_name']?></td>
                  <td><?=$homework['section']['name']?></td>
                  <td><?=$homework['subject']['name']?></td>
                  <td><?=substr($homework['title'], 0, 40)?></td>
                  <td><?=substr($homework['description'], 0, 40)?></td>
                  <td><?=$homework['user']['fname'].' '.$homework['user']['lname']?></td>
                  <td><?=date('d-M-y',strtotime($homework['created_at']))?></td>
                  <td>Add / Edit / Delete</td>
                </tr>
              <?php } ?>
            </tbody>
            <tfoot>
            <tr>
              <th>Class</th>
              <th>Section</th>
              <th>Subject</th>
              <th>Title</th>
              <th>Description</th>
              <th>Given By</th>
              <th>Added At</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection