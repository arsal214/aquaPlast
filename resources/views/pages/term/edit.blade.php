<x-app-layout title="Update Term & Condition">

    <x-breadcrumb title="Update Term & Condition" :back-button="route('pages.term-conditions.index')" />

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Update') }} Term & Condition</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.term-conditions.update', $term->id)">
                            {{ method_field('PATCH') }}
                            @include('pages.term.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->


</x-app-layout>
