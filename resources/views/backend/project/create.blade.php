@extends('layouts.app')
@section('content')
 <!-- Main content -->
 <section class="content">
    <div class="rows">
      <!-- right column -->

                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">project Create</h3>
                  </div>
                  <div class="container">

                            <form action="../../index.html" method="post">
                                @csrf

                                <div class="box-body">
                                  <div class="row">
                                    <div class="col-xs-4">
                                      <div class="input-group">
                                        <label for="project_title">Project ID:</label>
                                        <input type="text" class="form-control" name="project_id" id="project_id" placeholder="Project ID">

                                    </div>
                                    </div>

                                    <div class="col-xs-4">
                                      <div class="input-group">
                                        <label for="project_title">Project Title:</label>
                                        <input type="text" class="form-control" name="project_title" id="project_title" placeholder="Project title">
                                      </div>
                                  </div>

                                  <div class="col-xs-4">
                                    <div class="input-group">
                                      <label for="project_title">Project Duration:</label>
                                      <input type="text" class="form-control" name="project_duration" id="project_duration" placeholder="Project duration">
                                    </div>
                                </div>
                                  </div>
                                </div>

                                <!-- /.box-body -->

                                <div class="box-body">
                                  <div class="row">
                                      <div class="col-xs-4">
                                          <div class="input-group">
                                              <label for="project_couch">Project Coach:</label>
                                              <input type="text" class="form-control" name="project_couch" id="project_couch" placeholder="Project coach">
                                          </div>
                                      </div>

                                      <div class="col-xs-4">
                                          <div class="input-group">
                                              <label for="project_location">Project Location:</label>
                                              <input type="text" class="form-control" name="project_location" id="project_location" placeholder="Project location">
                                          </div>
                                      </div>

                                      <div class="col-xs-4">
                                          <div class="input-group">
                                              <label for="project_status">Project Status:</label>
                                              <select class="form-control" name="project_status" id="project_status">
                                                  <option value="planning">Planning</option>
                                                  <option value="ongoing">Ongoing</option>
                                                  <option value="completed">Completed</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                                <!-- /.box-body -->

                                <div class="box-body">
                                  <div class="row">
                                    <div class="col-xs-4">
                                      <div class="input-group">
                                        <label for="project_level">Project Level:</label>
                                        <input type="text" class="form-control" name="project_level" id="project_level" placeholder="Project level">
                                    </div>
                                    </div>

                                    <div class="col-xs-4">
                                      <div class="input-group">
                                        <label for="project_level">Project Budget:</label>
                                        <input type="text" class="form-control" name="project_budget" id="project_budget" placeholder="Project Budget">
                                    </div>
                                    </div>
                                    </div>
                                </div>




                                        <div class="col-md-12">

                                                <div class="box-header">
                                                    <!-- tools box -->
                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-default btn-sm"
                                                            data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-default btn-sm"
                                                            data-widget="remove" data-toggle="tooltip" title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body pad">
                                                    <label for="project_description">Project Description</label>
                                                    <textarea class="textarea" placeholder="Place some text here"
                                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                                        name="project_description"></textarea>
                                                </div>

                                        </div>
                                        <!-- /.col-->






                                <div class="box-footer">
                                    <a href="{{ route('project.index') }}" class="btn btn-warning">Cancel</a>
                                    <button type="submit" class="btn btn-info pull-right">Add Game</button>
                                </div>
                            </form>
                        </div>
                    </div>


                <!-- /.box -->
              </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
    <div class="box-body pad">
        <form>
            <textarea id="editor1" name="editor1" rows="10" cols="80">
        </textarea>
        </form>
    </div>
  </section>

@endsection
