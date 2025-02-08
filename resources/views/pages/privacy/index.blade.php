<x-app-layout title="Privacy Policy">

    <x-breadcrumb title="Privacy Policy Management">
{{--        @can('aboutUs-create')--}}
            @if(count($privacy) <= 0)
                <a href="{{ route('pages.privacy-policy.create') }}"
                   class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill">
            <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                <i class="ph-plus"></i>
            </span>
                    Create New
                </a>
            @endif
{{--        @endcan--}}
    </x-breadcrumb>

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Privacy Policy</h5>
                    </div>
                    <x-datatable :url="route('pages.privacy-policy.list')" :index="[
                        'DT_RowIndex',
                        'title',
                        'action',
                     ]">
                        <th>No</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </x-datatable>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->

</x-app-layout>
