@canany(['testimonials-edit','testimonials-delete'])
<x-actions
    :editRoute="route('pages.testimonials.edit', $row->id)" canEdit="testimonials-edit"
    :deleteRoute="route('pages.testimonials.destroy', $row->id)"   canDelete="testimonials-delete"
>
</x-actions>
@endcanany
