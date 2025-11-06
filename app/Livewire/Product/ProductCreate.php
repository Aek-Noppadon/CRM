<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProductCreate extends Component
{
    public $product_name, $brand, $supplier_rep, $principal;
    public $status = '0', $source = '1';

    public function render()
    {
        return view('livewire.product.product-create');
    }

    public function save()
    {
        $departmentId = auth()->user()->department_id;

        $exists = Product::where('product_name', $this->product_name)
            ->whereHas('userCreated', function ($query) use ($departmentId) {
                $query->where('department_id', $departmentId);
            })->exists();

        // do some thing
        // add my feature 1

        if ($exists) {
            $this->addError('product_name', __('custom/products.product_name'));
            return;
        }

        $this->validate(
            [
                'product_name' => ['required'],
                'brand' => 'required',
            ],
        );

        Product::create(
            [
                'product_name' => $this->product_name,
                'brand' => $this->brand,
                'supplier_rep' => $this->supplier_rep,
                'principal' => $this->principal,
                'status' => $this->status,
                'source' => $this->source,
                'created_user_id' => Auth::user()->id,
                'updated_user_id' => Auth::user()->id,
            ]
        );

        $this->dispatch(
            "sweet.success",
            position: "center",
            title: "Created Successfully !!",
            text: "Product : " . $this->product_name,
            icon: "success",
            timer: 3000,
            // url: route('product.list'),
        );

        $this->dispatch('close-modal-product');
    }

    #[On('reset-modal')]
    public function resetForm()
    {
        $this->reset();
    }
}
