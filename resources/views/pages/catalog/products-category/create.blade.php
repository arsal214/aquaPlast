<x-app-layout title="Create Product Category">

    <x-breadcrumb title="Create Product Category" :back-button="route('catalog.category.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Create Product Category') }}</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('catalog.category.store')">
                            @include('pages.catalog.products-category.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
</x-app-layout>
