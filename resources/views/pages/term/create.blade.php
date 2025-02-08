<x-app-layout title="Create Term Conditions">

    <x-breadcrumb title="Create Term Conditions" :back-button="route('pages.term-conditions.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Create Term Conditions') }}</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.term-conditions.store')">
                            @include('pages.term.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
</x-app-layout>
