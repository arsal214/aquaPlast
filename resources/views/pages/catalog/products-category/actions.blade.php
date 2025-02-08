@canany(['productCategory-edit','productCategory-delete'])
    <x-actions
        :editRoute="route('catalog.category.edit', $row->id)" canEdit="productCategory-edit"
        :deleteRoute="route('catalog.category.destroy', $row->id)" canDelete="productCategory-delete"
    >
    </x-actions>
@endcanany

