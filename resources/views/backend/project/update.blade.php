@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h2 class="box-title">Update project Information</h2>
                </div>
                <form method="POST" action="{{ route('project.edit', ['id' => $projects->id]) }}">
                    @csrf
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_name">{{ __('project Name') }}</label>
                                    <input type="text" class="form-control" name="project_name" value="{{ $projects->project_name }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_manager">{{ __('Project Manager') }}</label>
                                    <select class="form-control" name="project_manager_id" required>
                                        {{-- @foreach($projectManagers as $manager)
                                        <option value="{{ $projects->id }}">{{ $manager->name }}</option>
                                        @endforeach --}}

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">{{ __('Logo') }}</label>
                                    <input type="file" class="form-control" name="logo" id="logoInput" accept="image/*">
                                    @if($projects->logo)
                                    <img src="{{ asset('path_to_your_logo_folder/' . $projects->logo) }}" id="logoPreview" alt="Logo Preview" style="max-width: 100%; margin-top: 10px;">
                                    @else
                                    <img src="" id="logoPreview" alt="Logo Preview" style="max-width: 100%; margin-top: 10px; display: none;">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <script>
                            document.getElementById('logoInput').addEventListener('change', function (e) {
                                const preview = document.getElementById('logoPreview');
                                preview.src = URL.createObjectURL(e.target.files[0]);
                                preview.style.display = 'block';
                            });
                            </script>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coach_name">{{ __('Coach Name') }}</label>
                                    <input type="text" class="form-control" name="coach_name" value="{{ $projects->coach_name_id }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_information">{{ __('Contact Information') }}</label>
                                    <input type="text" class="form-control" name="contact_information" value="{{ $projects->contact_information }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="social_media_link">{{ __('Social Media Link') }}</label>
                                    <input type="text" class="form-control" name="social_media_link" value="{{ $projects->social_media_link }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Location">{{ __('Location') }}</label>
                                    <input type="text" class="form-control" name="Location" value="{{ $projects->Location }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="game_type_id">{{ __('Game Category') }}</label>
                                    <input type="text" class="form-control" name="game_type_id" value="{{ $projects->game_type_id }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="document">{{ __('Document') }}</label>
                                    <input type="text" class="form-control" name="document" value="{{ $projects->document }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }}</label>
                                    <textarea class="form-control" name="description">{{ $projects->description }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">{{ __('Status') }}</label>
                                    <select class="form-control" name="status">
                                        <option value="active" {{ $projects->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $projects->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('project.index') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Update project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
