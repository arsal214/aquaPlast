<x-app-layout title="HomePage">

    <x-breadcrumb title="HomePage Management">
                @can('homepage-create')
        @if(count($homepage) <= 0)
            <a href="{{ route('pages.homepage.create') }}"
               class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill">
            <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                <i class="ph-plus"></i>
            </span>
                Create New
            </a>
        @endif
                @endcan
    </x-breadcrumb>

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">HomePage</h5>
                    </div>
                    <x-datatable :url="route('pages.homepage.list')" :index="[
                        'DT_RowIndex',
                        'thumbnail',
                        'title',
                        'action',
                     ]">
                        <th>No</th>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </x-datatable>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->

</x-app-layout>
