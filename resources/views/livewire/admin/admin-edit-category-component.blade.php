<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="/" rel="nofollow">الرئيسيه</a>
                        <span></span> تعديل المجموعه
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
                                            تعديل المجموعه
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.categories')}}" class="btn btn-success float-end">جميع المجموعات</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <form wire:submit.prevent="updateCategory">
                                        <div class="mb-3 mt-3">
                                            <label for="parent_id" class="form-label">إختيار التنصيف الرئيسي</label>
                                            <select name="parent_id" id="parent_id" class="form-control" wire:model="parentId">
                                                <option value="*">لا يوجد تصنيف رئيسي</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id == $parentId ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <label for="name" class="form-label">الاسم</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter category name" wire:model="name" wire:keyup="generateSlug" />
                                            @error('name')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" name="slug" class="form-control" placeholder="Enter category slug" wire:model="slug" />
                                            @error('slug')
                                                <p class="text-danger">{{$message}}</p>
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
