@extends('admin.layouts.app')
@section('title')
    Category
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-2 rounded">
        <h3 class="mb-0">Categories</h3>
        <button class="btn btn-theme" data-bs-toggle="modal" data-bs-target="#addModal"><i data-feather="plus"
                class="icon-xs"></i> Add Category</button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered bg-white mb-3 text-nowrap">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Sub-Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $key => $category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @if ($category->subcategories->isNotEmpty())
                                <ul>
                                    @foreach ($category->subcategories as $subcategory)
                                        <li>{{ $subcategory->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted"></span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-sm btn-light border btn-sm me-1" data-bs-toggle="modal"
                                data-bs-target="#editCategoryModal{{ $category->id }}">
                                <i data-feather="edit" class="icon-xs"></i>
                            </button>
                            <button class="btn btn-sm btn-light border btn-sm me-1" data-bs-toggle="modal"
                                data-bs-target="#deleteCategoryModal{{ $category->id }}">
                                <i data-feather="trash" class="icon-xs"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No categories found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-2">
        {{ $categories->links() }}
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="categoryParent" class="form-label">Parent Category</label>
                            <select name="parent_id" id="categoryParent" class="form-control">
                                <option value="0">--Select Category--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="categoryName" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Category Modal -->
    @foreach ($categories as $category)
        <div class="modal fade" id="editCategoryModal{{ $category->id }}" tabindex="-1"
            aria-labelledby="editCategoryModalLabel{{ $category->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCategoryModalLabel{{ $category->id }}">Edit Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="categoryParent" class="form-label">Parent Category</label>
                                <select name="parent_id" id="categoryParent" class="form-control">
                                    <option value="0">--Select Category--</option>
                                    @foreach ($categories as $category_p)
                                        <option value="{{ $category_p->id }}"
                                            @if ($category_p->id == $category->parent_id) selected @endif>{{ $category_p->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="categoryName{{ $category->id }}">Name</label>
                                <input type="text" name="name" class="form-control"
                                    id="categoryName{{ $category->id }}" value="{{ $category->name }}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Delete Category Modal -->
    @foreach ($categories as $category)
        <div class="modal fade" id="deleteCategoryModal{{ $category->id }}" tabindex="-1"
            aria-labelledby="deleteCategoryModalLabel{{ $category->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteCategoryModalLabel{{ $category->id }}">Delete Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            Are you sure you want to delete the category "{{ $category->name }}"?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
