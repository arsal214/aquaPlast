<x-app-layout title="Create Product SLider">

    <x-breadcrumb title="Create Product Slider" :back-button="route('pages.product-slider.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Create product slider') }}</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.product-slider.store')">
                            @include('pages.product-slider.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
</x-app-layout>
