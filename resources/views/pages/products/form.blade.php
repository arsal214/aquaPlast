<div class="row g-2">

    <div class="col-md-6">
        <input type="hidden" name="supplier_id" value="{{$supplier_id ?? null}}"/>
        <div class="row g-2">

            <x-input name="name" :value="$service->name ?? null" :required="true"/>


            {{--            <x-input col="12" title="Sub Category" name="subcategory_id" type="select" :required="true">--}}
            {{--                @foreach ($subCategories as $category)--}}
            {{--                @foreach ($category->children as $child)--}}
            {{--                    <option value="{{ $child->id }}"--}}
            {{--                        {{ isset($service) && $child->id == $service->subcategory_id ? 'selected' : '' }}>--}}
            {{--                        {{ $child->name }}--}}
            {{--                    </option>--}}
            {{--                @endforeach--}}
            {{--                @endforeach--}}
            {{--            </x-input>--}}


            <x-input col="12" title="Subcategory" name="subcategory_id" type="select">
                @if (isset($service))
                    @foreach ($subCategories as $category)
                        @foreach ($category->children as $child)
                            <option value="{{ $child->id }}"
                                {{ $child->id == $service->subcategory_id ? 'selected' : '' }}>
                                {{ $child->name }}
                            </option>
                        @endforeach
                    @endforeach
                @endif
            </x-input>

{{--            <x-input col="12" name="tags" id="tags" class="tags" :value="$service->tags[0]->tags ?? ''"--}}
{{--                     :required="true"/>--}}


        </div>
    </div>
    <div class="col-md-6">
        <div class="row">

            <x-input col="12" title="Category" name="category_id" type="select" :required="true"
                     onchange="getSubcategories()">
                @foreach ($parentCategories as $category)
                    <option value="{{ $category->id }}"
                        {{ isset($service) && $category->id == $service->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </x-input>

            <x-input name="status" type="select" :required="true">
                <option
                    value="Active" @selected(isset($service->status) && $service->status == 'Active')>
                    Active
                </option>
                <option
                    value="DeActive" @selected(isset($service->status) && $service->status == 'DeActive')>
                    DeActive
                </option>

            </x-input>


        </div>
    </div>

</div>

<x-input col="12" type="textarea" title="description" name="description" :value="$service->description ?? null"
         class="tinymce"/>


<!-- Add FAQ Section -->
<div class="row g-2 mt-4">
    <div class="col-md-12">
        <div id="faq-container">
            <div id="faq-container">
                <!-- Initially the first FAQ field is present -->
                <div class="faq-item" id="faq-item-0">
                    <div class="row">
                        <div class="col-md-3">
                            <x-input name="faqs[0][question]" type="text" placeholder="Enter FAQ Question" required/>
                        </div>
                        <div class="col-md-3">
                            <x-input name="faqs[0][answer]" type="textarea" placeholder="Enter FAQ Answer" required/>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-danger remove-faq" data-faq-id="0">Remove</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" id="add-faq" class="btn btn-primary">Add FAQ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row g-2">
    @if(isset($service->images))
        @foreach($service->images as $img)
            <div class="col-md-4">
                <x-input name="image" type="dropify" :defaultFile="$img->image ?? null"
                         dropifyHeight="202"/>

            </div>
        @endforeach
    @else
        <div class="col-md-4">
            <x-input name="image" type="dropify" :defaultFile="$img->image ?? null"
                     dropifyHeight="202"/>

        </div>
    @endif

</div>





