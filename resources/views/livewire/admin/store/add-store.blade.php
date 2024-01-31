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
                    <span></span> إضافه متجر جديد
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
                                    <div class="col-md-6">
                                        إضافه متجر جديد
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.stores') }}" class="btn btn-success float-end">جميع المتاجر</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form wire:submit.prevent="addStore">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">الاسم</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter store name" wire:model="name"
                                            />
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="link" class="form-label">الرابط</label>
                                        <input type="text" name="link" class="form-control"
                                            placeholder="Enter store link" wire:model="link" />
                                        @error('link')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">الصوره</label>
                                        <input type="file" wire:model="image" name="image" id="image" class="form-control">
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end">حفظ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
