{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<x-backpack::menu-item title="Organizations" icon="la la-building" :link="backpack_url('organization')" />
<x-backpack::menu-item title="Links" icon="la la-link" :link="backpack_url('link')" />

<x-backpack::menu-item title="Youtube Videos" icon="la la-youtube" :link="backpack_url('youtube-video')" />

<x-backpack::menu-item title="Ideas" icon="la la-lightbulb" :link="backpack_url('idea')" />
