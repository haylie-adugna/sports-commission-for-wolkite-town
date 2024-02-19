@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Basketball Club Lineup
    </h1>
</section>
<!-- Main content -->
<section class="content">
    <div class="box box-info">

            <div class="box-body">
                <form>
                    <div class="col-md-4">
                                <div class="form-group">
                                    <label>Point Guard:</label>
                                    <select class="form-control select2" style="width: 100%;"
                                        name="point_guard" data-insert-attribute="true">
                                        <option>Choice...</option>
                                        <option>Team Sport</option>
                                        <option>Individual Sport</option>
                                        <option>Doubles Sport </option>
                                        <option>Mixed Sport</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Shooting Guard:</label>
                                    <select class="form-control select2" style="width: 100%;"
                                        name="shootingGuard" data-insert-attribute="true">
                                        <option>Choice...</option>
                                        <option>Team Sport</option>
                                        <option>Individual Sport</option>
                                        <option>Doubles Sport </option>
                                        <option>Mixed Sport</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Small Forward:</label>
                                    <select class="form-control select2" style="width: 100%;"
                                        name="smallForward" data-insert-attribute="true">
                                        <option>Choice...</option>
                                        <option>Team Sport</option>
                                        <option>Individual Sport</option>
                                        <option>Doubles Sport </option>
                                        <option>Mixed Sport</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Power Forward:</label>
                                    <select class="form-control select2" style="width: 100%;"
                                        name="powerForward" data-insert-attribute="true">
                                        <option>Choice...</option>
                                        <option>Team Sport</option>
                                        <option>Individual Sport</option>
                                        <option>Doubles Sport </option>
                                        <option>Mixed Sport</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Center:</label>
                                      <select class="form-control select2" style="width: 100%;"
                                    name="center" data-insert-attribute="true">
                                    <option>Choice...</option>
                                    <option>Team Sport</option>
                                    <option>Individual Sport</option>
                                    <option>Doubles Sport </option>
                                    <option>Mixed Sport</option>
                                </select>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Register</button>
                                <button type="submit" class="btn btn-warning pull-right">
                                    <a href="#"
                                        style="color: lightgray; text-decoration: none;">Cancel</a>
                                </button>
                            </div>
                    </div>
                </form>
                    <!-- /.col-md-4 -->


                <!-- row--->
                <div class="col-md-8">
                    <div class="box-body">
                        <div class="pull-right">
                            <img src="{{ asset('assets/images/basketballlineup.jpg') }}" alt="basketball lineup"
                                style="width: 750px; height: 400px;">
                        </div>
                    </div>
                </div>

        </div>
            <!-- /.col-md-4 -->


    </div>

</section>
@endsection
