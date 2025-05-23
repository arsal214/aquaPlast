<div class="row g-2">

    <div class="col-md-8">

        <div class="row g-2">

            <x-input col="12" name="title" :value="$about->title ?? null" :required="true" />

            <x-input col="12" name="description"  :value="$about->description ?? null" :required="true" />

        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <x-input name="image" type="dropify" :defaultFile="$about->image ?? null" dropifyHeight="205" />
        </div>
    </div>
</div>
