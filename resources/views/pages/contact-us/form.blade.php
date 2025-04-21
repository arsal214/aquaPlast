<div class="row g-2">

    <div class="col-md-8">

        <div class="row g-2">

            {{-- <x-input col="12" name="title" :value="$contact->title ?? null" :required="true" /> --}}


            <x-input col="6" name="email" :value="$contact->email ?? null" :required="true" />
            <x-input col="6" name="phone" :value="$contact->phone ?? null" :required="true" />
            <x-input col="6" name="location" :value="$contact->location ?? null" :required="true" />

        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <x-input name="background_image" type="dropify" :defaultFile="$contact->background_image ?? null" dropifyHeight="205" />
        </div>
    </div>
</div>
