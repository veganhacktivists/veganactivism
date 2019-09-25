<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li>
    <a href="{{ backpack_url('dashboard') }}">
        <i class="fa fa-dashboard"></i>
        <span>{{ trans('backpack::base.dashboard') }}</span>
    </a>
</li>

<li>
    <a href='{{ backpack_url('organization') }}'>
        <i class='fa fa-building'></i> <span>Organizations</span>
    </a>
</li>

<li>
    <a href='{{ backpack_url('link') }}'>
        <i class='fa fa-link'></i> <span>Links</span>
    </a>
</li>

@role(\App\Models\BackpackUser::ROLE_SUPER_ADMIN)
<li class="treeview">
    <a href="#">
        <i class="fa fa-group"></i>
        <span>Users, Roles, Permissions</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li>
            <a href="{{ backpack_url('user') }}">
                <i class="fa fa-user"></i>
                <span>Users</span>
            </a>
        </li>
        <li>
            <a href="{{ backpack_url('role') }}">
                <i class="fa fa-group"></i>
                <span>Roles</span>
            </a>
        </li>
        <li>
            <a href="{{ backpack_url('permission') }}">
                <i class="fa fa-key"></i>
                <span>Permissions</span>
            </a>
        </li>
    </ul>
</li>
@endrole