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
                    <span></span> جميع المتاجر
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
                                       جميع المتاجر
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('admin.store.add') }}" class="btn btn-success float-end">إضافه متجر جديد</a>
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
                                            <th>تاريخ الاضافه</th>
                                            <th>الاجراء</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stores as $store)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ $store->image }}"
                                                        alt="{{ $store->name }}" width="60" /></td>
                                                <td>{{ $store->name }}</td>
                                                <td>{{ $store->created_at->toDateTimeString() }}</td>
                                                <td>
                                                    <a href="{{ route('admin.store.edit', $store->id) }}"
                                                        class="text-info">تعديل</a>
                                                    <a herf="#" class="text-danger"
                                                        onclick="deleteConfirmation({{ $store->id }})"
                                                        style="margin-left:20px;">حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $stores->links() }}
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
                        <button type="button" class="btn btn-danger" onclick="deleteStore()">حذف</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id) {
            @this.set('store_id', id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteStore() {
            @this.call('deleteStore');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
