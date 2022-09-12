@extends('admin.layouts.master')

@section('head-tag')
<title>ایجاد عکس</title>
<link rel="stylesheet" href="{{ asset('admin-assets/jalalidatepicker/persian-datepicker.min.css') }}">
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
        <li class="breadcrumb-item font-size-12"> <a href="#">اسمبل هوشمند</a></li>
        <li class="breadcrumb-item font-size-12"> <a href="#">دسته بندی سیستم ها</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد عکس</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  ایجاد عکس
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
            </section>

            <section>
                <form action="{{ route('admin.smart-assemble.category.gallery.store', $systemCategory->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <section class="row">


                        <section class="col-12">
                            <div class="form-group">
                                <label for="">تصویر </label>
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>
                            @error('image')
                            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>


                        </section>

                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
{{--                    </section>--}}
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
