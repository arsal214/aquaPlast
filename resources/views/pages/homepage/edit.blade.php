<x-app-layout title="Update Homepage">

    <x-breadcrumb title="Update Homepage" :back-button="route('pages.homepage.index')" />

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Update') }} Homepage</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.homepage.update', $homepage->id)">
                            {{ method_field('PATCH') }}
                            <input type="hidden" name="old_img" value="{{ $homepage->thumbnail ?? '' }}">
                            @include('pages.homepage.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->


</x-app-layout>
