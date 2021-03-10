@extends('admin.layout.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>careate category </h1>
                </div>
        </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">

                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label> دسته والد</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="" disabled selected>
                                دسته والد  را انتخاب کنید
                            </option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" class="form-control" name="title" id="title">

                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="ثبت" class="btn btn-primary"/>
                    </div>
                </form>





            </div>
        </div>
    </section>





@endsection
