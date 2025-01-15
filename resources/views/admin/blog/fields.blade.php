<div class="col-sm-12">
    <div class="mb-3">
        <label>Title<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($blog->title) ? $blog->title : old('title') }}"
            placeholder="Enter Title" name="title">
        @error('title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea class="form-control" name="description" placeholder="Enter Description">{{ isset($blog->description) ? $blog->description : old('description') }}</textarea>
        @error('description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="email-wrapper">
        <div class="theme-form">
            <div class="mb-3">
                <label>Content</label>
                <textarea id="text-box" name="content" cols="10" rows="2">{!! isset($blog->content) ? $blog->content : '' !!}</textarea>
                @error('content')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="mb-3 multi-images">
        <label for="">Images</label>
        <input class="form-control" type="file" name="images[]" multiple="multiple">
        @isset($blog)
            <div class="mt-2 row">
                @foreach ($blog->getMedia('images') as $image)
                <div class="col-xxl-1 col-md-2 col-sm-3 col-auto mb-2">
                    <div class="multi-remove position-relative">
                        <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" width="10%">
                        <a href="" class="dz-remove text-danger" data-bs-target="#tooltipmodal{{ $image->id }}"
                            data-bs-toggle="modal">Remove</a>
                            <div class="modal fade" id="tooltipmodal{{ $image->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="tooltipmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title f-w-600">Confirm delete</h3>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3 class="mb-3"><b>Are you sure want to delete ?</b></h3>
                                    <p>This Item Will Be Deleted Permanently. You Can not Undo This Action.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                                    <a href="{{ route('admin.blog.removeImage', $image->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                    

                    <!-- Remove File Confirmation-->
                    
                @endforeach
            </div>
        @endisset
    </div>

    <div class="mb-3">
        <label for="">Thumbnail</label>
        <input class="form-control" type="file" name="thumbnail">
        @error('thumbnail')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @isset($blog)
            <div class="mt-3 comman-image">
                @foreach ($blog->getMedia('thumbnail') as $image)
                    <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" height="15%"
                        width="15%">
                @endforeach
            </div>
        @endisset
    </div>

    <div>
        <div class="col-form-label">Categories <span> *</span>
            <select class="js-category-placeholder-multiple col-sm-12" multiple="multiple" name="categories[]">
                @foreach ($categories as $key => $value)
                    <option value="{{ $key }}"
                        {{ (is_array(old('categories')) && in_array($key, old('categories'))) || (isset($default_categories) && in_array($key, $default_categories)) ? 'selected' : '' }}>
                        {{ $value }}
                    </option>
                @endforeach
            </select>
            @error('categories')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div>
        <div class="col-form-label">Tags
            <select class="js-tag-placeholder-multiple col-sm-12" multiple="multiple" name="tags[]">
                @foreach ($tags as $key => $value)
                    <option value="{{ $key }}"
                        {{ (is_array(old('tags')) && in_array($key, old('tags'))) || (isset($default_tags) && in_array($key, $default_tags)) ? 'selected' : '' }}>
                        {{ $value }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>  

    <div class="mb-3">
        <label for="">Meta Title<span> *</span></label>
        <input class="form-control" type="text"
            value="{{ isset($blog->meta_title) ? $blog->meta_title : old('meta_title') }}"
            placeholder="Enter Meta Title" name="meta_title">
        @error('meta_title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="">Meta Description</label>
        <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description">{{ isset($blog->meta_description) ? $blog->meta_description : old('meta_description') }}</textarea>
        @error('meta_description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="">Meta Image</label>
        <input class="form-control" type="file" name="meta_image">
        @isset($blog)
            @php
                $image = $blog->getFirstMedia('meta_image');
            @endphp
            <div class="mt-3 comman-image">
                @if ($image)
                    <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" height="30%"
                        width="30%">
                @endif
            </div>
        @endisset
        @error('meta_image')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="">Status</label>
        <select class="form-select js-example-basic-single" name="status">
            <option value="1" @if(old('status')=='1' ) selected @endif {{ !($blog->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Active') }}</option>
            <option value="0" @if(old('status')=='0' ) selected @endif {{ ($blog->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Deactive') }}</option>
        </select>
    </div>

    <div class="mb-3">
        <div class="text-end">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
            </div>
        </div>
    </div>
</div>