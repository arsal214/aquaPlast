
@canany(['aboutUs-edit','aboutUs-delete'])
<x-actions
    :editRoute="route('pages.about-us.edit', $row->id)"  canEdit="aboutUs-edit"

/>
@endcanany
