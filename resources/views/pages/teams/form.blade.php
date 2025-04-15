<div class="row g-2">

    <div class="col-md-8">

        <div class="row g-2">

            <x-input name="name" :value="$team->name ?? null" :required="true" />
                <x-input name="designation" :value="$team->designation ?? null" :required="true" />


            <x-input col="6" name="status" type="select" :required="true">
                <option value="Active" @selected(isset($team->status) && $team->status == 'Active')>Active</option>
                <option value="DeActive" @selected(isset($team->status) && $team->status == 'DeActive')>InActive</option>
            </x-input>

        

        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <x-input name="image" type="dropify" :defaultFile="$team->image ?? null" dropifyHeight="202" />
        </div>
    </div>

</div>


