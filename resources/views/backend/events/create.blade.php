@extends('layouts.app')
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="rows">
      <!-- right column -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h2 class="box-title">Insert Event</h2>
        </div>
        <form action="{{ route('events.register') }}" method="post" novalidate enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="row">
              <div class="col-xs-3">
                <label for="title">Event Title:</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="tittle" placeholder="Title" required>
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  </span>
                </div>
              </div>

              <div class="col-xs-3">
                <label for="type">Events Type</label>
                <div class="input-group">
                  <select class="form-control select2" name="type" required>
                    <option selected="selected">News</option>
                    <option>Announcement</option>
                    <option>Result</option>
                  </select>
                </div>
              </div>

              <div class="col-xs-3">
                <label for="image">Images or Videos:</label>
                <div class="input-group">
                  <input type="file" accept="image/*, video/*" class="form-control" name="image" id="fileInput" required>
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                  </span>
                </div>
                <div id="previewContainer"></div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <section class="content">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="box">
                        <div class="box-header">
                          <h3>
                            <label for="body">Content:</label>
                          </h3>
                          <!-- tools box -->
                          <div class="pull-right box-tools">
                            <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                              data-toggle="tooltip" title="Collapse">
                              <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-default btn-sm" data-widget="remove"
                              data-toggle="tooltip" title="Remove">
                              <i class="fa fa-times"></i></button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                          <textarea class="textarea" placeholder="Place some text here" name="body"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                            required></textarea>
                        </div>
                      </div>
                    </div>
                    <!-- /.col-->
                  </div>
                  <!-- ./row -->
                </section>
                <!-- /.content -->
              </div>
              <div class="col-xs-3">
                <label for="created_by">Created by {{ Auth::user()->user_type }}</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="created_by" readonly
                    value="{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }}" required>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="{{ route('events.index') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Post</button>
          </div>
        </form>
      </div>
    </div>
    <div class="box-body pad">
      <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
    </div>
    <!-- /.box -->
  </section>
@endsection