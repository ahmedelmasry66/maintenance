<?php

namespace Stevebauman\Maintenance\Viewers;

use Stevebauman\Maintenance\Viewers\BaseViewer;

class WorkOrderViewer extends BaseViewer {
    
    public function profile()
    {
        return view('maintenance::viewers.work-order.profile', array('workOrder'=>$this->entity));
    }
    
    public function report()
    {
        return view('maintenance::viewers.work-order.report', array('workOrder'=>$this->entity));
    }
    
    public function sessions()
    {
        return view('maintenance::viewers.work-order.sessions', array('workOrder'=>$this->entity));
    }
    
    public function attachments()
    {
        return view('maintenance::viewers.work-order.attachments', array('workOrder'=>$this->entity));
    }
    
    public function parts()
    {
        return view('maintenance::viewers.work-order.parts', array('workOrder'=>$this->entity));
    }
    
    public function customerUpdates()
    {
        return view('maintenance::viewers.work-order.customer-updates', array('workOrder'=>$this->entity));
    }
    
    public function btnEdit()
    {
        return view('maintenance::viewers.work-order.buttons.edit', array('workOrder'=>$this->entity));
    }
    
    public function btnDelete()
    {
        return view('maintenance::viewers.work-order.buttons.delete', array('workOrder'=>$this->entity));
    }
    
    public function btnCheckIn()
    {
        return view('maintenance::viewers.work-order.buttons.check-in', array('workOrder'=>$this->entity));
    }
    
    public function btnWorkers()
    {
        return view('maintenance::viewers.work-order.buttons.workers', array('workOrder'=>$this->entity));
    }
    
    public function btnNotifications()
    {
        return view('maintenance::viewers.work-order.buttons.notifications', array('workOrder'=>$this->entity));
    }
    
    public function btnComplete()
    {
        return view('maintenance::viewers.work-order.buttons.complete', array('workOrder'=>$this->entity));
    }
    
    public function btnAddParts()
    {
        return view('maintenance::viewers.work-order.buttons.add-parts', array('workOrder'=>$this->entity));
    }
    
    public function btnAddAttachments()
    {
        return view('maintenance::viewers.work-order.buttons.add-attachments', array('workOrder'=>$this->entity));
    }
    
    public function btnActions()
    {
        return view('maintenance::viewers.work-order.buttons.actions', array('workOrder'=>$this->entity));
    }
    
}