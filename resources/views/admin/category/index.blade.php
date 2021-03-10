@extends('admin.layout.master')
@section('css')
    <link rel="stylesheet" href="/admin/plugins/datatables/dataTables.bootstrap4.css">


@endsection

@section('content')
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>دسته بندی ها </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active">جداول داده</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Table With Full Features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>عنوان </th>
                                        <th>دسته والد</th>
                                        <th>ویرایش </th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>{{optional($category->parent)->title}}</td>
                                        <td>
                                            <a href="{{route('categories.edit',$category)}}" class="btn btn-sm btn-warning">edit</a>
                                        </td>
                                        <td>
                                            <form method="post" action="{{route('categories.destroy',$category)}}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit"class="btn  btn-danger" value="حذف" name="submit" id="submit">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>عنوان </th>
                                        <th>دسته والد</th>
                                        <th>ویرایش </th>
                                        <th>حذف</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>

@endsection

@section('script')
    <script src="/admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "language": {
                    "paginate": {
                        "next": "بعدی",
                        "previous" : "قبلی"
                    }
                },
                "info" : false,
            });
            $('#example2').DataTable({
                "language": {
                    "paginate": {
                        "next": "بعدی",
                        "previous" : "قبلی"
                    }
                },
                "info" : false,
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "autoWidth": false
            });
        });
    </script>
@endsection
