@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h2 class="box-title">Update Club Information</h2>
                </div>
                <form method="POST" action="{{ route('clubs.edit', ['id' => $clubs->id]) }}">
                    @csrf
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="club_name">{{ __('Club Name') }}</label>
                                    <input type="text" class="form-control" name="club_name" value="{{ $clubs->club_name }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="club_manager">{{ __('Club Manager') }}</label>
                                    <input type="text" class="form-control" name="club_manager_id" value="{{ $clubs->club_manager_id }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">{{ __('Logo') }}</label>
                                    <input type="file" class="form-control" name="logo" id="logoInput" accept="image/*">
                                    @if($clubs->logo)
                                    <img src="{{ asset('path_to_your_logo_folder/' . $clubs->logo) }}" id="logoPreview" alt="Logo Preview" style="max-width: 100%; margin-top: 10px;">
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
                                    <input type="text" class="form-control" name="coach_name" value="{{ $clubs->coach_name }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_information">{{ __('Contact Information') }}</label>
                                    <input type="text" class="form-control" name="contact_information" value="{{ $clubs->contact_information }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="social_media_link">{{ __('Social Media Link') }}</label>
                                    <input type="text" class="form-control" name="social_media_link" value="{{ $clubs->social_media_link }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Location">{{ __('Location') }}</label>
                                    <input type="text" class="form-control" name="Location" value="{{ $clubs->Location }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="game_type_id">{{ __('Game Category') }}</label>
                                    <input type="text" class="form-control" name="game_type_id" value="{{ $clubs->game_type_id }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="document">{{ __('Document') }}</label>
                                    <input type="text" class="form-control" name="document" value="{{ $clubs->document }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }}</label>
                                    <textarea class="form-control" name="description">{{ $clubs->description }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">{{ __('Status') }}</label>
                                    <select class="form-control" name="status">
                                        <option value="active" {{ $clubs->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $clubs->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('clubs.index') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Update Club</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
