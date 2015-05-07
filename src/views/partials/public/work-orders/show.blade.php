@extends('maintenance::layouts.main')

@section('header')
    <h1>{{ $title }}</h1>
@stop

@section('breadcrumb')
    <li>
        <a href="{{ route('maintenance.work-requests.index') }}">
            <i class="fa fa-book"></i>
            My Work Requests
        </a>
    </li>
    <li class="active">
        {{ $workOrder->subject }}
    </li>
@stop

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">
                Viewing Your Work Request: {{ $workOrder->subject }}
            </h3>
        </div>

        <div class="panel-body">

            <a class="btn btn-app"
               data-target="#notification-modal"
               data-toggle="modal"
                    >
                <i class="fa fa-warning"></i>
                Notifications
            </a>

            <a href="{{ route('maintenance.work-requests.edit', array($workOrder->id)) }}" class="btn btn-app">
                <i class="fa fa-edit"></i>
                Edit
            </a>

            <a href="{{ route('maintenance.work-requests.destroy', array($workOrder->id)) }}"
               data-method="delete"
               data-title="Delete your work request?"
               data-message="Are you sure you want to delete this work request?"
               class="btn btn-app">
                <i class="fa fa-trash-o"></i> Delete
            </a>

            <hr>


            <dl class="dl-horizontal">

                <dt>Status:</dt>
                <dd>{{ $workOrder->status->label }}</dd>

                <p></p>

                <dt>Subject:</dt>
                <dd>{{ $workOrder->subject }}</dd>

                <p></p>

                <dt>Description:</dt>
                <dd>{{ $workOrder->description }}</dd>

                <p></p>
            </dl>
        </div>

    </div>

    @include('maintenance::work-orders.partials.update-box', array('workOrder'=>$workOrder))

@stop
