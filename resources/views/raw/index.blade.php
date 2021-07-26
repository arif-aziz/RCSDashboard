@extends('master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Raw Data
        <small>Upload &amp; Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Raw Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Raw Upload</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ URL::to('raw') }}" id="frm-fileraw" method="post" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="progress progress-sm active">
                  <div class="progress-bar progress-bar-danger progress-bar-striped" 
                       role="progressbar" 
                       aria-valuenow="0" 
                       aria-valuemin="0" 
                       aria-valuemax="100" 
                       style="">
                    <span id="info-complete"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inp-fileraw">File input</label>
                  <input type="file" name="fileraw" id="inp-fileraw">

                  <p class="help-block">Make sure your file has .xls format</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="btn-fileraw" class="btn btn-danger">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box upload-->

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Raw Preview</h3>

              <div class="box-tools pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-download"></i>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ URL::to('raw/download/xls') }}">Download .xls</a></li>
                    <li><a href="{{ URL::to('raw/download/xlsx') }}">Download .xlsx</a></li>
                    <li><a href="{{ URL::to('raw/download/csv') }}">Download .csv</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl-raw-prev" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width='70px'>Date</th>
                  <th>Cluster</th>
                  <th width='70px'>Outleti ID</th>
                  <th width='150px'>Outlet Name</th>
                  <th width='200px'>Sales Name</th>
                  <th width='150px'>SCC</th>
                  <th>DL A2</th>
                  <th>DL BSE</th>
                  <th>DL Prime</th>
                  <th>DL L</th>
                  <th>DL Mifi</th>
                  <th>DL SP GSM</th>
                  <th>DL SP Now</th>
                  <th>DL SP Now (+)</th>
                  <th>OP A2</th>
                  <th>OP BSE</th>
                  <th>OP Prime</th>
                  <th>OP L</th>
                  <th>OP Mifi</th>
                  <th>OP SP GSM</th>
                  <th>OP SP Now</th>
                  <th>OP SP Now (+)</th>
                  <th>Chip Eload Reg</th>
                  <th>Chip Eload Trx</th>
                  <th>SRIS Reg</th>
                  <th>SRIS Insentive</th>
                  <th>JC Plan</th>
                  <th>JC Actual</th>
                  <th>JC Effective</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($raw as $valRaw)
                  <tr>
                    <td>{{ $valRaw->rcsdate }}</td>
                    <td>{{ $valRaw->rcscluster }}</td>
                    <td>{{ $valRaw->rcsoutletid }}</td>
                    <td>{{ $valRaw->rcsoutletname }}</td>
                    <td>{{ $valRaw->rcssalesname }}</td>
                    <td>{{ $valRaw->rcsscc }}</td>
                    <td>{{ $valRaw->dla2 }}</td>
                    <td>{{ $valRaw->dlbse }}</td>
                    <td>{{ $valRaw->dlprime }}</td>
                    <td>{{ $valRaw->dll }}</td>
                    <td>{{ $valRaw->dlmifi }}</td>
                    <td>{{ $valRaw->dlspgsm }}</td>
                    <td>{{ $valRaw->dlspnow }}</td>
                    <td>{{ $valRaw->dlspnowplus }}</td>
                    <td>{{ $valRaw->opa2 }}</td>
                    <td>{{ $valRaw->opbse }}</td>
                    <td>{{ $valRaw->opprime }}</td>
                    <td>{{ $valRaw->opl }}</td>
                    <td>{{ $valRaw->opmifi }}</td>
                    <td>{{ $valRaw->opspgsm }}</td>
                    <td>{{ $valRaw->opspnow }}</td>
                    <td>{{ $valRaw->opspnowplus }}</td>
                    <td>{{ $valRaw->chipeloadreg }}</td>
                    <td>{{ $valRaw->chipeloadtrx }}</td>
                    <td>{{ $valRaw->srisreg }}</td>
                    <td>{{ $valRaw->srisinsentive }}</td>
                    <td>{{ $valRaw->jcplan }}</td>
                    <td>{{ $valRaw->jcactual }}</td>
                    <td>{{ $valRaw->jceffective }}</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Date</th>
                  <th>Cluster</th>
                  <th>Outleti ID</th>
                  <th>Outlet Name</th>
                  <th>Sales Name</th>
                  <th>SCC</th>
                  <th>DL A2</th>
                  <th>DL BSE</th>
                  <th>DL Prime</th>
                  <th>DL L</th>
                  <th>DL Mifi</th>
                  <th>DL SP GSM</th>
                  <th>DL SP Now</th>
                  <th>DL SP Now (+)</th>
                  <th>OP A2</th>
                  <th>OP BSE</th>
                  <th>OP Prime</th>
                  <th>OP L</th>
                  <th>OP Mifi</th>
                  <th>OP SP GSM</th>
                  <th>OP SP Now</th>
                  <th>OP SP Now (+)</th>
                  <th>Chip Eload Reg</th>
                  <th>Chip Eload Trx</th>
                  <th>SRIS Reg</th>
                  <th>SRIS Insentive</th>
                  <th>JC Plan</th>
                  <th>JC Actual</th>
                  <th>JC Effective</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box preview-->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection