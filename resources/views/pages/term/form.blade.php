<div class="row g-2">

    <div class="col-md-8">

        <div class="row g-2">

            <x-input col="12" name="title" :value="$term->title ?? null" :required="true" />

            <x-input col="12" type="textarea" title="Content" name="description" :value="$term->description ?? null"  class="tinymce"/>

        </div>
    </div>.

    <div class="col-md-4">
        <div class="row">
            <x-input name="image" type="dropify" :defaultFile="$term->image ?? null" dropifyHeight="202" />
        </div>
    </div>

</div>

@push('scripts')
<script src="{{ asset('backend/assets/js/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/tinymce.js') }}"></script>
@endpush
