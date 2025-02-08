<x-app-layout title="Term & Conditions">

    <x-breadcrumb title="Term & Conditions Management">
{{--        @can('aboutUs-create')--}}
            @if(count($term) <= 0)
                <a href="{{ route('pages.term-conditions.create') }}"
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
                        <h5 class="mb-0">Term Conditions</h5>
                    </div>
                    <x-datatable :url="route('pages.term-conditions.list')" :index="[
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
