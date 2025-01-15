<div class="col-sm-12">
    <div class="mb-3">
        <label class="form-label" for="">Title<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($page->title) ? $page->title : old('title') }}" placeholder="Enter Title" name="title">
        @error('title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="email-wrapper">
        <div class="theme-form">
            <div class="mb-3">
                <label>Content</label>
                <textarea id="text-box" name="content" cols="10" rows="2">{!! isset($page->content) ? $page->content : '' !!}</textarea>
                @error('content')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="mt-3">
        <label class="form-label" for="">Meta Title<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($page->meta_title) ? $page->meta_title : old('meta_title') }}" placeholder="Enter Meta Title" name="meta_title">
        @error('meta_title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mt-3">
        <label class="form-label" for="">Meta Description</label>
        <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description">{{ isset($page->meta_description) ? $page->meta_description : old('meta_description') }}</textarea>
        @error('meta_description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mt-3">
        <label class="form-label" for="">Meta Image</label>
        <input class="form-control" type="file" name="meta_image">
        @error('meta_image')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @isset($page)
        <div class="mt-3 comman-image">
            @foreach ($page->getMedia('meta_image') as $image)
                <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" height="15%"
                    width="15%">
            @endforeach
        </div>
        @endisset
    </div>

    <div class="mt-3">
        <label class="form-label" for="">Status</label>
        <select class="form-select js-example-basic-single" name="status">
            <option value="1" @if(old('status')=='1' ) selected @endif {{ !($page->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Active') }}</option>
            <option value="0" @if(old('status')=='0' ) selected @endif {{ ($page->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Deactive') }}</option>
        </select>
    </div>

    <div class="col-12">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
        </div>
    </div>
</div>