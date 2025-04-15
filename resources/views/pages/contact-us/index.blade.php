<x-app-layout title="Contact Us">

    <x-breadcrumb title="Contact Us Management">
        
            @if(count($contact) <= 0)
                <a href="{{ route('pages.contact-us.create') }}"
                   class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill">
            <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                <i class="ph-plus"></i>
            </span>
                    Create New
                </a>
            @endif
        
    </x-breadcrumb>

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Contact Us</h5>
                    </div>
                    <x-datatable :url="route('pages.contact-us.list')" :index="[
                        'DT_RowIndex',
                        'background_image',
                        'title',
                        'action',
                     ]">
                        <th>No</th>
                        <th>Background Image</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </x-datatable>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->

</x-app-layout>
