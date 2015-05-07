@extends('maintenance::layouts.pages.main.panel')

@section('panel.extra.top')

    @include('maintenance::inventory.modals.search', array(
        'url' => route('maintenance.inventory.index', Input::only('field', 'sort'))
    ))

@stop

@section('panel.head.content')
    <div class="btn-toolbar">
        <a href="{{ route('maintenance.inventory.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
            New Item
        </a>
        <a href="#" class="btn btn-primary" data-target="#search-modal" data-toggle="modal" title="Filter results">
            <i class="fa fa-search"></i>
            Search
        </a>
    </div>
@stop

@section('panel.body.content')

    @if($items->count() > 0)

        {{
            $items->columns(array(
                'id' => 'ID',
                'name' => 'Name',
                'category' => 'Category',
                'current_stock' => 'Current Stock',
                'description' => 'Description',
                'added_on' => 'Added On',
                'action'  => 'Action'
            ))
            ->means('category', 'category.trail')
            ->means('added_on', 'created_at')
            ->modify('action', function($item){
                return $item->viewer()->btnActions;
            })
            ->sortable(array(
                'id',
                'name',
                'category' => 'category_id',
                'added_on' => 'created_at',
            ))
            ->hidden(array('id', 'added_on', 'description'))
            ->showPages()
            ->render()
        }}

    @else

        <h5>There are no inventory items to list.</h5>

    @endif

@stop
