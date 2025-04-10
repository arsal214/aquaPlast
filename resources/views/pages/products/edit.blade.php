<x-app-layout title="Update Product">
    <x-breadcrumb title="Update Product"/>
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Update Product') }}</h5>
                    </div>
                    <div class="card-body">
                        <x-form :route="route('products.update', $service->id)">
                            {{ method_field('PATCH') }}

                            <div class="row g-2">

                                <div class="col-md-6">
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

                                        <x-input name="is_featured" type="select" :required="true">
                                            <option
                                                value="Yes" @selected(isset($service->is_featured) && $service->is_featured == 'Yes')>
                                                Yes
                                            </option>
                                            <option
                                                value="No" @selected(isset($service->is_featured) && $service->is_featured == 'No')>
                                                No
                                            </option>

                                        </x-input>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">

                                        <x-input col="12" title="Category" name="category_id" type="select"
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

                                        <x-input name="is_popular" type="select" :required="true">
                                            <option
                                                value="Yes" @selected(isset($service->is_popular) && $service->is_popular == 'Yes')>
                                                Yes
                                            </option>
                                            <option
                                                value="No" @selected(isset($service->is_popular) && $service->is_popular == 'No')>
                                                No
                                            </option>

                                        </x-input>


                                    </div>
                                </div>

                            </div>

                            <x-input col="12" type="textarea" title="short description" name="short_description"
                                     :value="$service->short_description ?? null"
                            />

                            <x-input col="12" type="textarea" title="description" name="description"
                                     :value="$service->description ?? null"
                                     class="tinymce"/>


                            <!-- Add FAQ Section -->
                            <!-- Add FAQ Section -->
                            <div class="row g-2 mt-4">
                                <div class="col-md-12">
                                    <div id="faq-container">
                                        @if(isset($service->faqs) && count($service->faqs) > 0)
                                            @foreach ($service->faqs as $index => $faq)
                                                <div class="faq-item" id="faq-item-{{ $index }}">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <x-input name="faqs[{{ $index }}][question]" type="text"
                                                                     placeholder="Enter FAQ Question"
                                                                     value="{{ $faq->question }}" required/>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <x-input name="faqs[{{ $index }}][answer]" type="textarea"
                                                                     placeholder="Enter FAQ Answer"
                                                                     value="{{ $faq->answers }}" required/>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <button type="button" class="btn btn-danger remove-faq"
                                                                    data-faq-id="{{ $index }}">Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="faq-item" id="faq-item-0">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <x-input name="faqs[0][question]" type="text"
                                                                 placeholder="Enter FAQ Question" required/>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <x-input name="faqs[0][answer]" type="textarea"
                                                                 placeholder="Enter FAQ Answer" required/>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button type="button" class="btn btn-danger remove-faq"
                                                                data-faq-id="0">Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <button type="button" id="add-faq" class="btn btn-primary mt-2">Add FAQ</button>
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


                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
    @push('scripts')
        <script src="{{ asset('backend/assets/js/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/tinymce.js') }}"></script>
    @endpush


    <script>
        // // This function will be called when a category is selected
        // function getSubcategories() {
        //     var categoryId = document.querySelector('select[name="category_id"]').value;

        //     // Clear previous subcategory options
        //     var subcategorySelect = document.querySelector('select[name="subcategory_id"]');
        //     subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';

        //     if (categoryId) {
        //         // Make an AJAX call to get subcategories based on selected category
        //         fetch('/catalog/get-subcategories/' + categoryId)
        //             .then(response => response.json())
        //             .then(data => {
        //                 data.subcategories.forEach(function (subcategory) {
        //                     var option = document.createElement('option');
        //                     option.value = subcategory.id;
        //                     option.textContent = subcategory.name;
        //                     subcategorySelect.appendChild(option);
        //                 });
        //             })
        //             .catch(error => console.error('Error fetching subcategories:', error));
        //     }
        // }

        // // Call getSubcategories on page load to show the correct subcategory if editing
        // document.addEventListener('DOMContentLoaded', function () {
        //     if (document.querySelector('select[name="category_id"]').value) {
        //         getSubcategories();
        //     }
        // });


        function getSubcategories(selectedSubcategoryId = null) {
    var categoryId = document.querySelector('select[name="category_id"]').value;
    var subcategorySelect = document.querySelector('select[name="subcategory_id"]');
    subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';

    if (categoryId) {
        fetch('/catalog/get-subcategories/' + categoryId)
            .then(response => response.json())
            .then(data => {
                data.subcategories.forEach(function (subcategory) {
                    var option = document.createElement('option');
                    option.value = subcategory.id;
                    option.textContent = subcategory.name;

                    if (selectedSubcategoryId && selectedSubcategoryId == subcategory.id) {
                        option.selected = true;
                    }

                    subcategorySelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching subcategories:', error));
    }
}

document.addEventListener('DOMContentLoaded', function () {
    var initialCategoryId = document.querySelector('select[name="category_id"]').value;
    var selectedSubcategoryId = "{{ $service->subcategory_id ?? '' }}";

    if (initialCategoryId) {
        getSubcategories(selectedSubcategoryId);
    }
});


        document.addEventListener('DOMContentLoaded', function () {
            let faqIndex = 1; // Start from 1 since we already have one FAQ in the HTML

            // Add FAQ button click handler
            document.getElementById('add-faq').addEventListener('click', function () {
                // Create a new FAQ item div
                const newFaqItem = document.createElement('div');
                newFaqItem.classList.add('faq-item');
                newFaqItem.id = `faq-item-${faqIndex}`; // Unique ID for each FAQ

                // Create the new FAQ fields (Question & Answer) and Remove button
                newFaqItem.innerHTML = `
                <div class="row">
                    <div class="col-md-4">
                        <x-input name="faqs[${faqIndex}][question]" type="text" placeholder="Enter FAQ Question" required />
                    </div>
                    <div class="col-md-4">
                        <x-input name="faqs[${faqIndex}][answer]" type="textarea" placeholder="Enter FAQ Answer" required />
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-danger remove-faq" data-faq-id="${faqIndex}">Remove</button>
                    </div>
                </div>
            `;

                // Append the new FAQ item to the container
                document.getElementById('faq-container').appendChild(newFaqItem);

                // Increment the index for the next FAQ
                faqIndex++;
            });

            // Event delegation to handle the remove FAQ functionality
            document.getElementById('faq-container').addEventListener('click', function (event) {
                if (event.target && event.target.classList.contains('remove-faq')) {
                    // Get the FAQ ID from the button's data attribute
                    const faqId = event.target.getAttribute('data-faq-id');

                    // Remove the FAQ item from the DOM
                    const faqItem = document.getElementById(`faq-item-${faqId}`);
                    faqItem.remove();
                }
            });
        });

    </script>
</x-app-layout>

