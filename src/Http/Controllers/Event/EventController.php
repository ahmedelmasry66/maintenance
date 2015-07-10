<?php

namespace Stevebauman\Maintenance\Http\Controllers\Event;

use Stevebauman\Maintenance\Http\Requests\Event\Request;
use Stevebauman\Maintenance\Repositories\EventRepository;
use Stevebauman\Maintenance\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * @var EventRepository
     */
    protected $event;

    /**
     * @param EventRepository $event
     */
    public function __construct(EventRepository $event)
    {
        $this->event = $event;
    }

    /**
     * Displays all current events.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('maintenance::events.index');
    }

    /**
     * Displays the form for creating a new event.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('maintenance::events.create');
    }

    /**
     * Creates a new event.
     *
     * @parma Request $request
     *
     * @return \Illuminate\Support\Facades\Response
     */
    public function store(Request $request)
    {
        $event = $this->event->create($request);

        if($event) {
            $message = 'Successfully created event.';

            return redirect()->route('maintenance.events.index')->withSuccess($message);
        } else {
            $message = 'There was an issue creating an event. Please try again.';

            return redirect()->route('maintenance.events.create')->withErrors($message);
        }
    }

    /**
     * Displays the specified event.
     *
     * @param int|string $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $event = $this->event->find($id);

        $apiObject = $this->event->findApiObject($event->api_id);

        if($apiObject) {
            return view('maintenance::events.show', compact('event', 'apiObject'));
        }

        abort(404);
    }

    /**
     * Displays the form for editing the specified event.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function edit($id)
    {
        $event = $this->event->find($id);

        $apiObject = $this->event->findApiObject($event->api_id);

        if($apiObject) {
            return view('maintenance::events.edit', compact('event', 'apiObject'));
        }

        abort(404);
    }

    /**
     * Updates an event.
     *
     * @param Request    $request
     * @param int|string $id
     *
     * @return \Illuminate\Support\Facades\Response
     */
    public function update(Request $request, $id)
    {
        $event = $this->event->update($request, $id);

        if($event) {
            $message = 'Successfully updated event.';

            return redirect()->route('maintenance.events.show', [$event->id])->withSuccess($message);
        } else {
            $message = 'There was an issue updating this event. Please try again.';

            return redirect()->route('maintenance.events.create')->withErrors($message);
        }
    }

    /**
     * @param string $api_id
     *
     * @return \Illuminate\Support\Facades\Response
     */
    public function destroy($api_id)
    {
        if ($this->event->destroyByApiId($api_id)) {
            $this->message = 'Successfully deleted event';
            $this->messageType = 'success';
            $this->redirect = route('maintenance.events.index');
        } else {
            $this->message = 'There was an error trying to delete this event. Please try again.';
            $this->messageType = 'danger';
            $this->redirect = route('maintenance.events.show', [$api_id]);
        }

        return $this->response();
    }
}
