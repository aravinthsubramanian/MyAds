@include('layouts.admin.head')

<body>
    <div class="main-wrapper">

        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')

        <div class="page-wrapper page-settings">
            <div class="content">
                <div class="content-page-header content-page-headersplit">
                    <h5>Category</h5>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body flex-column-blk">
                                <div class="title-blk flex-between">
                                    <h4>Category Lists</h4>
                                    <div class="list-btn">
                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-item"><i class="fa fa-plus me-2"></i>add category</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-resposnive table-div">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Category slug</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categories as $category)
                                                        <tr>
                                                            <td>{{ $category->category }}</td>
                                                            <td>{{ $category->category_slug }}</td>
                                                            <td>{{ $category->created_at }}</td>
                                                            <td>
                                                                <div class="active-switch">
                                                                    <label class="switch">
                                                                        <input type="checkbox" @if ($category->status) ? checked : @endif>
                                                                        <span class="sliders round"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="table-actions d-flex">
                                                                    <a class="delete-table me-2" href="javascript:;">
                                                                        <i class="fa-solid fa-pencil"></i>
                                                                    </a>
                                                                    <a class="delete-table" data-bs-toggle="modal" data-bs-target="#delete-item" href="javascript:void(0);">
                                                                        <i class="fa-solid fa-trash-can"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- add -->
    <div class="modal fade" id="add-item" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button class="btn-close close-modal" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ route('admin.addcategory') }}" method="POST">
                    @csrf
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-set">
                                    <label>Category Name</label>
                                    <input class="form-control" id="category" name="category" type="text" value="{{ old('category') }}" placeholder="Category Name">
                                    @error('category')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-set">
                                    <label>Category Slug</label>
                                    <input class="form-control" id="category_slug" name="category_slug" type="text" value="{{ old('category_slug') }}" placeholder="Category Slug" readonly>
                                    @error('category_slug')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-set">
                                    <label>Status</label>
                                    <ul class="custom-radiosbtn">
                                        <li>
                                            <label class="radiossets">Active
                                                <input name="status" type="radio" value="1" checked>
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiossets">Inactive
                                                <input name="status" type="radio" value="0">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                @error('status')
                                    <p class='text-danger'>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button class="btn btn-submit me-3" type="submit"> Submit</button>
                        <a class="btn btn-cancel" data-bs-dismiss="modal" href="javascript:void(0);">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /add -->

    <!-- Delete -->
    <div class="modal fade" id="delete-item" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Services</h5>
                    <button class="btn-close close-modal" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="listings.html">
                    <div class="modal-body py-0">
                        <div class="del-modal">
                            <p>Are you sure want to Delete?</p>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button class="btn btn-cancel" data-bs-dismiss="modal" type="button">Cancel</button>
                        <button class="btn btn-submit" type="submit">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Delete -->

    <!-- Scripts  -->
    @include('layouts.admin.script')

</body>

@include('layouts.admin.footer')
