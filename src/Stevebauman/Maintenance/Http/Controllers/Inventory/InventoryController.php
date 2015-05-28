<?php

namespace Stevebauman\Maintenance\Http\Controllers\Inventory;

use Stevebauman\Maintenance\Validators\InventoryValidator;
use Stevebauman\Maintenance\Services\Inventory\InventoryService;
use Stevebauman\Maintenance\Http\Controllers\Controller;

/**
 * Class InventoryController.
 */
class InventoryController extends Controller
{
    /**
     * @var InventoryService
     */
    protected $inventory;

    /**
     * @var InventoryValidator
     */
    protected $inventoryValidator;

    /**
     * Constructor.
     *
     * @param InventoryService   $inventory
     * @param InventoryValidator $inventoryValidator
     */
    public function __construct(InventoryService $inventory, InventoryValidator $inventoryValidator)
    {
        $this->inventory = $inventory;
        $this->inventoryValidator = $inventoryValidator;
    }

    /**
     * Display all inventory entries (paginated with search functionality).
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = $this->inventory->setInput($this->inputAll())->getByPageWithFilter();

        return view('maintenance::inventory.index', [
            'title' => 'Inventory',
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating an inventory.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('maintenance::inventory.create', [
            'title' => 'Add an Item to the Inventory',
        ]);
    }

    /**
     * Store a new inventory.
     *
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function store()
    {
        if ($this->inventoryValidator->passes()) {
            $record = $this->inventory->setInput($this->inputAll())->create();

            if ($record) {
                $this->message = sprintf('Successfully added item to the inventory: %s', link_to_route('maintenance.inventory.show', 'Show', [$record->id]));
                $this->messageType = 'success';
                $this->redirect = route('maintenance.inventory.index');
            } else {
                $this->message = 'There was an error adding this item to the inventory. Please try again.';
                $this->messageType = 'danger';
                $this->redirect = route('maintenance.inventory.create');
            }
        } else {
            $this->errors = $this->inventoryValidator->getErrors();
        }

        return $this->response();
    }

    /**
     * Display the specified inventory.
     *
     * @param int|string $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $item = $this->inventory->find($id);

        return view('maintenance::inventory.show', [
            'title' => 'Viewing Inventory Item: '.$item->name,
            'item' => $item,
        ]);
    }

    /**
     * Displays the edit form for the specified inventory.
     *
     * @param int|string $id
     *
     * @return mixed
     */
    public function edit($id)
    {
        $item = $this->inventory->find($id);

        return view('maintenance::inventory.edit', [
            'title' => 'Editing Inventory Item: '.$item->name,
            'item' => $item,
        ]);
    }

    /**
     * Updates the specified inventory.
     *
     * @param int|string $id
     *
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function update($id)
    {
        if ($this->inventoryValidator->passes()) {
            $item = $this->inventory->setInput($this->inputAll())->update($id);

            if ($item) {
                $this->message = sprintf('Successfully updated item: %s', link_to_route('maintenance.inventory.show', 'Show', [$item->id]));
                $this->messageType = 'success';
                $this->redirect = route('maintenance.inventory.show', [$item->id]);
            } else {
                $this->message = 'There was an error trying to update this item. Please try again.';
                $this->messageType = 'danger';
                $this->redirect = route('maintenance.inventory.edit', [$id]);
            }
        } else {
            $this->errors = $this->inventoryValidator->getErrors();
        }

        return $this->response();
    }

    /**
     * Removes the specified inventory.
     *
     * @param int|string $id
     *
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function destroy($id)
    {
        $this->inventory->destroy($id);

        $this->redirect = route('maintenance.inventory.index');
        $this->message = 'Successfully deleted item';
        $this->messageType = 'success';

        return $this->response();
    }
}
