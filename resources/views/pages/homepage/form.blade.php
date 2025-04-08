<div class="row g-2">

    <div class="col-md-8">

        <div class="row g-2">

            <x-input col="12" name="title" :value="$homepage->title ?? null" :required="true"/>

            <x-input col="12" name="description" :value="$homepage->description ?? null" :required="true"/>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <x-input name="thumbnail" type="dropify" :defaultFile="$homepage->thumbnail ?? null" dropifyHeight="205"/>
        </div>
    </div>

</div>