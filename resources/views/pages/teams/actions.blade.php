{{-- @canany(['blogs-edit','blogs-delete']) --}}
<x-actions
    :editRoute="route('pages.teams.edit', $row->id)" 
    :deleteRoute="route('pages.teams.destroy', $row->id)"
>
</x-actions>
{{-- @endcanany --}}
