<x-app-layout title="Create Homepage">

    <x-breadcrumb title="Create Homepage" :back-button="route('pages.homepage.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Create Homepage') }}</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.homepage.store')">
                            @include('pages.homepage.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
</x-app-layout>
