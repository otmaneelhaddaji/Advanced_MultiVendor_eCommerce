@extends('admin.layouts.master')

@section('admin_content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">

                    <div class="card-header card-header-border-bottom">
                        <h2>Update Banner</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('banner.update', $banner->id) }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">Title</label>
                                    <input type="text" name="title" class="form-control" id="validationServer01"
                                        placeholder="Banner title..." value="{{ $banner->title }}">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer02">Description</label>

                                    <!-- Textarea 2 rows height -->
                                    <div class="form-outline">
                                        <textarea value="" name="description" class="form-control" id="textAreaExample3"
                                            rows="2">{{ $banner->description }}</textarea>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationServer04">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">--status--</option>
                                        <option value="active" {{ $banner->status == 'active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="inactive" {{ $banner->status == 'inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>

                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationServer05">Condition</label>
                                    <select name="condition" class="form-control">
                                        <option value="">--condition--</option>
                                        <option value="banner" {{ $banner->condition == 'banner' ? 'selected' : '' }}>
                                            Banner</option>
                                        <option value="promo" {{ $banner->condition == 'promo' ? 'selected' : '' }}>
                                            Promotional</option>
                                    </select>

                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload description file</label>

                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                            <input id="thumbnail" class="form-control" type="text" name="photo"
                                                value="{{ $banner->photo }}">
                                        </div>

                                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                                    </div>

                                </div>

                            </div>
                            <button id="update_data" class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>

@endsection
