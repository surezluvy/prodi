<div class="cf nestable-lists">
    <div class="dd" id="nestable">
        <ol class="dd-list">
            @foreach($menus as $d)
            <li class="dd-item list-group-item list-group-item-primary rounded"
                data-menu_id="{{ $d->menu_id }}" data-urut="{{ $d->urut }}">
                <div class="dd-handle">{{ $d->name }}</div>
                {{-- {{ \App\Models\Menu::where('parent_id', $d->menu_id)->get() }} --}}
                <ol class="dd-list">
                    @foreach(\App\Models\Menu::where('parent_id', $d->menu_id)->orderBy('urut',
                    'ASC')->get() as $c)
                    <li class="dd-item list-group-item list-group-item-primary rounded"
                        data-menu_id="{{ $c->menu_id }}" data-urut="{{ $c->urut }}">
                        <div class="dd-handle">{{ $c->name }}</div>
                    </li>
                    @endforeach
                </ol>
            </li>
            @endforeach
        </ol>
    </div>
</div>