<x-app-layout title="Product SLider">

    <x-breadcrumb title="Product Slider Management">

            
                <a href="{{ route('pages.product-slider.create') }}"
                   class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill">
            <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                <i class="ph-plus"></i>
            </span>
                    Create New
                </a>
            

    </x-breadcrumb>

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Product Slider</h5>
                    </div>
                    <x-datatable :url="route('pages.product-slider.list')" :index="[
                        'DT_RowIndex',
                        'image',
                        'title',
                        'action',
                     ]">
                        <th>No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </x-datatable>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->

</x-app-layout>
