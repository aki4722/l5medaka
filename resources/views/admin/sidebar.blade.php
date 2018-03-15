<div class="col-md-3">
    @foreach($laravelAdminMenus->menus as $section)
        @if($section->items)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $section->section }}
                </div>

                <div class="panel-body">
                    <ul class="nav flex-column" role="tablist">
                        @foreach($section->items as $menu)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="{{ url($menu->url) }}">
                                    {{ $menu->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <br/>
        @endif
    @endforeach
</div>
