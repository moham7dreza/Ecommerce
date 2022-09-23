@extends('admin.layouts.master')

@section('head-tag')
<title>گالری</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">اسمبل هوشمند</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">سیستم ها</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> گالری</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    گالری
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.smart-assemble.system.gallery.create', $system) }}" class="btn btn-info btn-sm">ایجاد عکس جدید </a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover h-150px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام سیستم</th>
                            <th>تصویر</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($system->images as $image)

                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $system->name }}</td>
                            <td>
                                <img src="{{ asset($image->image['indexArray'][$image->image['currentImage']] ) }}" alt="" width="100" height="50">
                            </td>

                            <td class="width-16-rem text-left">
                                <form class="d-inline" action="{{ route('admin.smart-assemble.system.gallery.destroy', ['system' => $system , 'systemGallery' => $image] ) }}" method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button class="btn btn-danger btn-sm delete" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                                </form>

                        </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection


@section('script')

@include('admin.alerts.sweetalert.delete-confirm', ['className' => 'delete'])


@endsection
