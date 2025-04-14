<div class="row g-2">

    <div class="col-md-8">

        <div class="row g-2">

            <x-input col="12" name="title" :value="$about->title ?? null" :required="true" />

            <x-input col="12" name="short_description"  :value="$about->short_description ?? null" :required="true" />

        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <x-input name="background_image" type="dropify" :defaultFile="$about->background_image ?? null" dropifyHeight="205" />
        </div>
    </div>

    <x-input col="6" type="textarea" name="our_story" title="Supplier Captions" :value="$about->our_story ?? null" :required="true" />
    <x-input col="6" type="textarea" name="our_vision" title="Captain Captions" :value="$about->our_vision ?? null" :required="true"/>

    <x-input col="12" type="textarea" name="our_aim" title="Our Aim" :value="$about->our_aim ?? null"  :required="true"/>

</div>
