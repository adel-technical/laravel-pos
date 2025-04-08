<div class="container">
    <x-content-header :titlePage="'
         الاقسام
         '" />
    <x-image-loading />
    <section class="content">
        <div class="card">
            <div class="card-header">
                @can('create user')
                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    أضافة جديد
                    + 
                </a>
                @endcan
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">
                                اسم القسم
                            </th>
                            <th scope="col">
                                الإجراءات
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr wire:key="{{ $category->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    @can('edit category')
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm">تعديل</a>
                                    @endcan

                                    @can('delete category')
                                    <x-button-delete :id="$category->id" route="categories" />
                                    @endcan 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{ $categories->links() }}
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

