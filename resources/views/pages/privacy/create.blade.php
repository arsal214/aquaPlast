<x-app-layout title="Create Privacy Policy">

    <x-breadcrumb title="Create Privacy Policy" :back-button="route('pages.privacy-policy.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Create Privacy Policy') }}</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.privacy-policy.store')">
                            @include('pages.privacy.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
</x-app-layout>
