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
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> All Stores
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
                                        All Stores
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('admin.store.add') }}" class="btn btn-success float-end">Add
                                            new store</a>
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
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Action</th>
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
                                                        class="text-info">Edit</a>
                                                    <a herf="#" class="text-danger"
                                                        onclick="deleteConfirmation({{ $store->id }})"
                                                        style="margin-left:20px;">Delete</a>
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
                        <h4 class="pb-3">Do you want to this record</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteStore()">Delete</button>
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
