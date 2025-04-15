<x-app-layout title="Update contact Us">

    <x-breadcrumb title="Update About Us" :back-button="route('pages.contact-us.index')" />

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Update') }} contact Us</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.contact-us.update', $about->id)">
                            {{ method_field('PATCH') }}
                            @include('pages.contact-us.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
</x-app-layout>
