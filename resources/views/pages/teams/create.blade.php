<x-app-layout title="Create Teams">

    <x-breadcrumb title="Create Teams" :back-button="route('pages.teams.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Create Teams') }}</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.teams.store')">
                            @include('pages.teams.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
</x-app-layout>

