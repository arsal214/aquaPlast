@canany(['products-edit','products-delete'])
<x-actions
    :editRoute="route('products.edit', $row->id)"   canEdit="products-edit"
    :deleteRoute="route('products.destroy', $row->id)" canDelete="products-delete"
>
</x-actions>
@endcanany
