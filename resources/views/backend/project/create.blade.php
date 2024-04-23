@extends('layouts.app')
@section('content')
    <section class="content w-full">
        <div class="container">
            <!-- right column -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New project</h3>
                </div>
                <form action="{{ route('project.register') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="project_name">project Name:</label>
                                    <input type="text" class="form-control" name="project_name" id="project_name" placeholder="project Name" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="project_manager_id">project Manager:</label>
                                    <select class="form-control" name="project_manager_id" id="project_manager_id" required>
                                        @forelse(\App\Models\Role::where('title', 'project_manager')->first()->users ?? [] as $projectManager)
                                            <option value="{{ $projectManager->id }}">{{ $projectManager->first_name }}</option>
                                        @empty
                                            <option value="" disabled>No project managers available</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="coach_name_id">Coach:</label>
                                    <select class="form-control" name="coach_name_id" id="coach_name_id">
                                        @forelse(\App\Models\Role::where('title', 'coach')->first()->users ?? [] as $coach)
                                            <option value="{{ $coach->id }}">{{ $coach->first_name }}</option>
                                        @empty
                                            <option value="" disabled>No available coach</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact_information">Contact Information:</label>
                                    <input type="text" class="form-control" name="contact_information" id="contact_information" placeholder="Enter Contact Information (Email, Phone)" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="social_media_link">Social Media Link:</label>
                                    <input type="text" class="form-control" name="social_media_link" id="social_media_link" placeholder="(Facebook, Telegram, Instagram, WhatsApp)">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Location">Location/Meeting Place:</label>
                                    <input type="text" class="form-control" name="Location" id="Location" placeholder="Location">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label for="image">Images</label>
                                <div class="input-group">
                                    <input type="file" accept="image/*" class="form-control" name="image" id="imageInput" required>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                                    </span>
                                </div>
                                <div id="imagePreviewContainer"></div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="game_type_id">Game Category or type:</label>
                                    <select class="form-control" name="game_type_id" id="game_type_id">
                                        @foreach(DB::table('games')
                                        ->select('id', 'game_type')
                                        ->groupBy('game_type', 'id')
                                        ->get() as $gameType)
                                            <option value="{{ $gameType->id }}">{{ $gameType->game_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label for="document">Documents:</label>
                                <div class="input-group">
                                    <input type="file" accept=".pdf, .doc, .docx, .txt, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control" name="document" placeholder="Select Document">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3><label for="description">Description:</label></h3>
                                        <div class="pull-right box-tools">
                                            <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body pad">
                                        <textarea class="form-control" placeholder="Place some text here" name="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ route('project.index') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Add project</button>
                    </div>
                </form>

        </div>
        </div>
        <div class="box-body pad">
            <form>
                <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
            </form>
        </div>
    </section>
@endsection
