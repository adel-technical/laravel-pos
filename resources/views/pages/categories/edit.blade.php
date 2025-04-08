@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <x-content-header :titlePage="'تعديل القسم'" />
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('categories.index') }}" class="text-primary">
                        الرجوع
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST" role="form">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">اسم القسم</label>
                            <input type="text" class="form-control" id="category_name" name="category_name"
                                placeholder="أدخل اسم القسم" value="{{ old('category_name', $category->category_name) }}">
                            @error('category_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">تحديث</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
