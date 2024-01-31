<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">الرئيسيه</a>
                    <span></span> جميع المنتجات
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        جميع المنتجات
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('admin.product.add') }}" class="btn btn-success float-end">إضافه منتج جديد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الصوره</th>
                                            <th>الاسم</th>
                                            <th>Slug</th>
                                            <th>السعر</th>
                                            <th>المجموعه</th>
                                            <th>التاريخ</th>
                                            <th>الاجراء</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ $product->image }}"
                                                        alt="{{ $product->name }}" width="60" /></td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->slug }}</td>
                                                <td>{{ $product->regular_price }}</td>
                                                <td>{{ $product->category->name ?? '' }}</td>
                                                <td>{{ $product->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('admin.product.edit', ['product_id' => $product->id]) }}"
                                                        class="text-info">تعديل</a>
                                                    <a herf="#" class="text-danger"
                                                        onclick="deleteConfirmation({{ $product->id }})"
                                                        style="margin-left:20px;">حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">هل انت متأكد انك تريد حذف هذا العنصر؟</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#deleteConfirmation">إلغاء</button>
                        <button type="button" class="btn btn-danger" onclick="deleteProduct()">حذف</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id) {
            @this.set('product_id', id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteProduct() {
            @this.call('deleteProduct');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
