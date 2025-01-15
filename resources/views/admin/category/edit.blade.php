@extends('layouts.simple.master')

@section('breadcrumb-title')
    <h4>Edit Category</h4>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item f-w-400">Category</li>
    <li class="breadcrumb-item f-w-400 active">Edit</li>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nestable-style.css') }}">
@endsection

@section('main_content')
<div class="container-fluid">
  <div class="page-title">
      <div class="row">
          <div class="col-sm-6 ps-0">
              <h3>Categories Management</h3>
          </div>
          <div class="col-sm-6 pe-0">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                          <svg class="stroke-icon">
                              <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                          </svg></a></li>
                  <li class="breadcrumb-item">Categories</li>
                  <li class="breadcrumb-item active">Edit</li>
              </ol>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-5 col-lg-6">
            <div class="card height-equal">
                <div class="card-header categories-edit">
                    <h3>Categories</h3>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-primary mt-2">{{ __('Add Category') }}</a>
                </div>
                <div class="card-body">
                    @include('admin.category.list', ['categories' => $categories])
                </div>
            </div>
        </div>
        <div class="col-xxl-7 col-lg-6">
            <div class="card height-equal">
                <div class="card-header">
                    <h3>Edit Category</h3>
                </div>
                <div class="card-body">
                    <form class="row g-3 custom-input" id="categoryForm" action="{{ route('admin.category.update', $cat->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('admin.category.fields', ['parents' => $parent])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
<script src="{{ asset('assets/js/nestable/jquery.nestable.min.js')}}"></script> 
<script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-validation/validation.js') }}"></script>
<script>
    $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      function updateToDatabase() {
        idString = $('.dd').nestable('toArray', {
          attribute: 'data-id'
        });
        var orderIndex = [];
        $('#nestable3 li').each(function(index) {
          orderIndex.push({
            id: $(this).attr('data-id'),
            order: index
          })
        });
        var mergedArray = Object.values(Object.groupBy([...orderIndex, ...idString],
          ({
            id
          }) => id)).map(e => e.reduce((acc, cur) => ({
          ...acc,
          ...cur
        })));
  
        $.ajax({
          url: '{{ route("admin.category.update.orders") }}',
          method: 'POST',
          data: {
            categories: mergedArray
          },
          success: function() {
            //
          }
        })
      }
  
      $('.dd').nestable({
        maxDepth: 12
      }).on('change', updateToDatabase);
    })
</script>
@endsection