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
                    <a href="/" rel="nofollow">لرئيسيه</a>
                    <span></span> إضافه منتج جديد
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
                                        إضافه منتج جديد
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.products') }}" class="btn btn-success float-end">جميع المنتجات</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form wire:submit.prevent="addProduct">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">الاسم</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter product name" wire:model="name"
                                            wire:keyup="generateSlug" />
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            placeholder="Enter product slug" wire:model="slug" />
                                        @error('slug')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!--<div class="mb-3 mt-3">-->
                                    <!--    <label for="short_description" class="form-label">Short Description</label>-->
                                    <!--    <textarea class="form-control" name="short_description" placeholder="Enter Short Description"-->
                                    <!--        wire:model="short_description"></textarea>-->
                                    <!--    @error('short_description')-->
                                    <!--        <p class="text-danger">{{ $message }}</p>-->
                                    <!--    @enderror-->
                                    <!--</div>-->
                                    <!--<div class="mb-3 mt-3">-->
                                    <!--    <label for="description" class="form-label">Description</label>-->
                                    <!--    <textarea class="form-control" name="description" placeholder="Enter Description" wire:model="description"></textarea>-->
                                    <!--    @error('description')-->
                                    <!--        <p class="text-danger">{{ $message }}</p>-->
                                    <!--    @enderror-->
                                    <!--</div>-->
                                    <div class="mb-3 mt-3">
                                        <label for="regular_price" class="form-label">سعر الشراء</label>
                                        <input type="text" name="regular_price" class="form-control"
                                            placeholder="Enter Regular Price" wire:model="regular_price" />
                                        @error('regular_price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="sale_price" class="form-label">سعر البيع</label>
                                        <input type="text" name="sale_price" class="form-control"
                                            placeholder="Enter Sale Price" wire:model="sale_price" />
                                        @error('sale_price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!--<div class="mb-3 mt-3">-->
                                    <!--    <label for="sku" class="form-label">SKU</label>-->
                                    <!--    <input type="text" name="sku" class="form-control"-->
                                    <!--        placeholder="Enter SKU" wire:model="sku" />-->
                                    <!--    @error('sku')-->
                                    <!--        <p class="text-danger">{{ $message }}</p>-->
                                    <!--    @enderror-->
                                    <!--</div>-->
                                    <!--<div class="mb-3 mt-3">-->
                                    <!--    <label for="stock_status" class="form-label" wire:model="stock_status">Stock-->
                                    <!--        Status</label>-->
                                    <!--    <select class="form-control">-->
                                    <!--        <option value="instock">Instock</option>-->
                                    <!--        <option value="outofstock">Out Of Stock</option>-->
                                    <!--    </select>-->
                                    <!--    @error('stock_status')-->
                                    <!--        <p class="text-danger">{{ $message }}</p>-->
                                    <!--    @enderror-->
                                    <!--</div>-->
                                    <div class="mb-3 mt-3">
                                        <label for="featured" class="form-label" >ميمز ام لا؟</label>
                                        <select class="form-control" name="featured" wire:model="featured">
                                            <option value="0">لا</option>
                                            <option value="1">نعم</option>
                                        </select>
                                        @error('featured')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!--<div class="mb-3 mt-3">-->
                                    <!--    <label for="quantity" class="form-label">Quantity</label>-->
                                    <!--    <input type="text" name="quantity" class="form-control"-->
                                    <!--        placeholder="Enter Product Quantity" wire:model="quantity" />-->
                                    <!--    @error('quantity')-->
                                    <!--        <p class="text-danger">{{ $message }}</p>-->
                                    <!--    @enderror-->
                                    <!--</div>-->
                                   <div class="mb-3 mt-3">
                                        <label for="link" class="form-label">الرابط</label>
                                        <input type="text" name="link" class="form-control"
                                            placeholder="Enter Product Link" wire:model="link" />
                                        @error('link')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                     <div class="mb-3 mt-3">
                                        <label for="discount_code" class="form-label">رمز الخصم</label>
                                        <input type="text" name="discount_code" class="form-control"
                                            placeholder="Enter Discount code" wire:model="discount_code" />
                                        @error('discount_code')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">الصوره</label>
                                        <input type="file" name="image" class="form-control"
                                            wire:model="image" />
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120">
                                        @endif
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-label">المجموعه</label>
                                        <select class="form-control" name="category_id" wire:model="category_id">
                                            <option value="">برجاء إختيار المجموعه</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="stars" class="form-label">التقييم</label>
                                        <select class="form-control" name="stars" wire:model="stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        @error('stars')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="store_id" class="form-label">المتجر</label>
                                        <select class="form-control" name="store_id" wire:model="store_id">
                                            <option value="">برجاء إختيار المتجر</option>
                                            @foreach ($stores as $store)
                                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('store_id')
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
