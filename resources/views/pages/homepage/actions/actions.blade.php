
@canany(['homepage-edit'])
<x-actions
    :editRoute="route('pages.homepage.edit', $row->id)"  canEdit="homepage-edit"

/>
@endcanany
