<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::latest('id')->paginate(10);
        return view('admin.supplier.index', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:suppliers,email',
            'phone' => 'required|unique:suppliers,phone',
            'address' => 'nullable|string|max:500'
        ]);

        $data['phone'] = trim($data['phone']);
        $data['address'] = trim($data['address']);

        Supplier::create($data);

        return redirect()->back()->with('success', 'Supplier Added Successfully');
    }

    public function update(Request $request, Supplier $supplier)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:suppliers,email',
            'phone' => 'required|unique:suppliers,phone',
            'address' => 'nullable|string|max:500'
        ]);

        $supplier->update($data);

        return redirect()->back()->with('success', 'Supplier Update Successfully');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->back()->with('warning', 'Supplier Delete Successfully');
    }
}
