<x-app-layout title="Create contact Us">

    <x-breadcrumb title="Create contact Us" :back-button="route('pages.contact-us.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Create contact Us') }}</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.contact-us.store')">
                            @include('pages.contact-us.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
</x-app-layout>
