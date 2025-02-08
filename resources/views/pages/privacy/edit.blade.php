<x-app-layout title="Update Privacy Policy">

    <x-breadcrumb title="Update Privacy Policy" :back-button="route('pages.privacy-policy.index')" />

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Update') }} Privacy Policy</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.privacy-policy.update', $privacy->id)">
                            {{ method_field('PATCH') }}
                            @include('pages.privacy.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->


</x-app-layout>
