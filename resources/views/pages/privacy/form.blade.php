<div class="row g-2">

    <div class="col-md-8">

        <div class="row g-2">

            <x-input col="12" name="title" :value="$privacy->title ?? null" :required="true" />

            <x-input col="12" type="textarea" title="Content" name="description" :value="$privacy->description ?? null"  class="tinymce"/>

        </div>
    </div>

</div>

@push('scripts')
    <script src="{{ asset('assets/js/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/tinymce.js') }}"></script>
@endpush
