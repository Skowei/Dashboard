<x-dashboard-layout>
<x-slot name="header">Users</x-slot>

<x-sk.table 
    :collection="$users" 
    :print="['id', 'name', 'email']" 
    :show="__()" 
    :edit="__()" 
    :delete="__()" 
    pagination
/>

</x-dashboard-layout>