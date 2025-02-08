<x-form :route="route('products.change', $row->id)" :button="false">
    {{ method_field('PATCH') }}
    <input type="hidden" name="field" value="supplier_status">
    <div class="form-check form-check-inline form-switch">
        <input type="checkbox" class="form-check-input" name="supplier_status" {{ $row->status == 'Active' ? 'checked' : '' }}
            onChange="event.preventDefault(); this.closest('form').submit();">
    </div>
</x-form>
