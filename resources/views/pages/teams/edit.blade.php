<x-app-layout title="Update Teams">

    <x-breadcrumb title="Update Teams" :back-button="route('pages.teams.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Update') }} Team</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.teams.update', $team->id)">
                            {{ method_field('PATCH') }}
                            <input type="hidden" name="old_img" value="{{ $team->image ?? '' }}">
                            @include('pages.teams.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->


</x-app-layout>
