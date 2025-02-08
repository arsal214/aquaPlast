<div class="row g-2">

    <div class="col-md-8">

        <div class="row g-2">

            <x-input name="name" col="6" :value="$testimonial->name ?? null" :required="true" />

            <x-input name="designation" col="6" :value="$testimonial->designation ?? null" :required="true" />


            <x-input  title="Rating"  name="stars" col="12" type="number" :value="$testimonial->stars ?? null" :required="true" />


            <x-input col="6" name="status" type="select" :required="true">
                <option value="Active" @selected(isset($testimonial->status) && $testimonial->status == 'Active')>Active</option>
                <option value="DeActive" @selected(isset($testimonial->status) && $testimonial->status == 'DeActive')>InActive</option>
            </x-input>

            <x-input col="6" name="is_featured" type="select" :required="true">
                <option value="Yes" @selected(isset($testimonial->is_featured) && $testimonial->is_featured == 'Yes')>Yes</option>
                <option value="No" @selected(isset($testimonial->is_featured) && $testimonial->is_featured == 'No')>No</option>
            </x-input>

            <x-input col="12" type="textarea" title="Comment" name="comment" :value="$testimonial->comment ?? null" />

        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <x-input name="image" type="dropify" :defaultFile="$testimonial->image ?? null" dropifyHeight="202" />
            <x-input name="icon" type="dropify" :defaultFile="$testimonial->icon ?? null" dropifyHeight="202" />
        </div>
    </div>

</div>
