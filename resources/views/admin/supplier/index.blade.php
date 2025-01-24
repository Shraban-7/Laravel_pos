@extends('admin.layouts.app')
@section('title')
    Supplier
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-2 rounded">
        <h3 class="mb-0">Suppliers</h3>
        <button class="btn btn-theme" data-bs-toggle="modal" data-bs-target="#addModal"><i data-feather="plus"
                class="icon-xs"></i> Add Supplier</button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered bg-white mb-3 text-nowrap">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($suppliers as  $supplier)
                    <tr>
                        <td>{{ $supplier->name }}</td>
                        <td>
                            {{ $supplier->email }}
                        </td>
                        <td>
                            {{ $supplier->phone }}
                        </td>
                        <td>
                            {{ $supplier->address }}
                        </td>
                        <td>
                            <button class="btn btn-sm btn-light border btn-sm me-1" data-bs-toggle="modal"
                                data-bs-target="#editSupplierModal{{ $supplier->id }}">
                                <i data-feather="edit" class="icon-xs"></i>
                            </button>
                            <button class="btn btn-sm btn-light border btn-sm me-1" data-bs-toggle="modal"
                                data-bs-target="#deleteSupplierModal{{ $supplier->id }}">
                                <i data-feather="trash" class="icon-xs"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- edit modal -->
                    <div class="modal fade" id="editSupplierModal{{ $supplier->id }}" tabindex="-1"
                        aria-labelledby="editSupplierModalLabel{{ $supplier->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editSupplierModalLabel{{ $supplier->id }}">Edit Supplier
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('admin.suppliers.update', $supplier->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="supplierName" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="supplierName"
                                                value="{{ $supplier->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="supplierEmail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="supplierEmail"
                                                value="{{ $supplier->email }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="supplierPhone" class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="supplierPhone"
                                                value="{{ $supplier->phone }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="supplierAddress" class="form-label">Address</label>
                                            <textarea name="address" class="form-control" id="supplierAddress">
                                                {{ old('address', str_replace(["\n", "\r"], ' ', trim($supplier->address))) }}
                                            </textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- delete modal -->
                    <div class="modal fade" id="deleteSupplierModal{{ $supplier->id }}" tabindex="-1"
                        aria-labelledby="deleteSupplierModalLabel{{ $supplier->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteSupplierModalLabel{{ $supplier->id }}">Delete
                                        Supplier</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('admin.suppliers.delete', $supplier->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-body">
                                        Are you sure you want to delete the supplier "{{ $supplier->name }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No suppliers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-2">
        {{ $suppliers->links() }}
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Supplier </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.suppliers.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="supplierName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="supplierName" required>
                        </div>
                        <div class="mb-3">
                            <label for="supplierEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="supplierEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="supplierPhone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="supplierPhone" required>
                        </div>
                        <div class="mb-3">
                            <label for="supplierAddress" class="form-label">Address</label>
                            <textarea name="address" class="form-control" id="supplierAddress"></textarea>
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
    {{-- @foreach ($categories as $category)
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
    @endforeach --}}

    <!-- Delete Category Modal -->
    {{-- @foreach ($categories as $category)
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
    @endforeach --}}
@endsection
