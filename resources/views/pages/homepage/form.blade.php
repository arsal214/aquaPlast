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

<div class="row g-2">
    @if (isset($homepage))
        @php
        $image_1 = '/images/homepage/'.  $homepage->image_1;
         $image_2 = '/images/homepage/'.  $homepage->image_2;
         $image_3 = '/images/homepage/'.  $homepage->image_3;
         $image_4 = '/images/homepage/'.  $homepage->image_4;
         $image_5 = '/images/homepage/'.  $homepage->image_5;

        @endphp
    @endif
    <div class="col-md-3">

        <x-input name="image_1" type="dropify" :defaultFile="$image_1 ?? null" dropifyHeight="205"/>
    </div>
    <div class="col-md-3">
        <x-input name="image_2" type="dropify" :defaultFile="$image_2 ?? null" dropifyHeight="205"/>
    </div>
    <div class="col-md-3">
        <x-input name="image_3" type="dropify" :defaultFile="$image_3 ?? null" dropifyHeight="205"/>
    </div>
    <div class="col-md-3">
        <x-input name="image_4" type="dropify" :defaultFile="$image_4 ?? null" dropifyHeight="205"/>
    </div>
    <div class="col-md-3">
        <x-input name="image_5" type="dropify" :defaultFile="$image_5 ?? null" dropifyHeight="205"/>
    </div>

</div>
