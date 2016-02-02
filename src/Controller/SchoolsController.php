<?php

// src/Controller/SchoolsController.php

namespace App\Controller;
use Cake\ORM\TableRegistry;

class SchoolsController extends AppController
{

    public $uses = array('Schools', 'Status');

    public function index()
    {
        $schools = $this->Schools->find('all');
        $this->set(compact('schools'));
    }

    public function view($id = null)
    {
        $school = $this->Schools->get($id);
        $this->set(compact('school'));
    }

    public function add()
    {
        $school = $this->Schools->newEntity($this->request->data);
        //debug($school->errors());
        
        if ($this->request->is('post')) 
        {
            //$school = $this->Schools->patchEntity($school, $this->request->data);
            
            if ($this->Schools->save($school)) 
            {
                $this->Flash->success(__('Your school has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('Unable to add your school.'));

        }
        
        $this->set('school', $school);
    }


    public function addSchoolStatus($id = null)
    {
        $SchoolStatus = TableRegistry::get('SchoolStatus');
        
        $school = $SchoolStatus->Schools->get($id);      
        $status = $SchoolStatus->newEntity();
        $status->id = $school->id;
        

        if ($this->request->is('post')) 
        {
            
            $status = $SchoolStatus->patchEntity($status, $this->request->data);
            
            if ($SchoolStatus->save($status)) 
            {
                $this->Flash->success(__('Your school status has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
        
            $this->Flash->error(__('Unable to add your school status.'));
        }
        
        $this->set('status', $status);
    }


    public function edit($id = null)
	{
	    $school = $this->Schools->get($id);
	    
	    if ($this->request->is(['post', 'put'])) 
        {
	        $this->Schools->patchEntity($school, $this->request->data);
	        
            if ($this->Schools->save($school)) 
            {
	            $this->Flash->success(__('Your school has been updated.'));
	            return $this->redirect(['action' => 'index']);
	        }
	        
            $this->Flash->error(__('Unable to update your school.'));
	    }

	    $this->set('school', $school);
	}
}