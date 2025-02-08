<x-app-layout title="Update Testimonial">

    <x-breadcrumb title="Update Testimonial" :back-button="route('pages.testimonials.index')" />


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Update') }} Testimonial</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('pages.testimonials.update', $testimonial->id)">
                            {{ method_field('PATCH') }}
                            <input type="hidden" name="old_img" value="{{ $testimonial->image ?? '' }}">
                            @include('pages.testimonials.form')
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->


</x-app-layout>
