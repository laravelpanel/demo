<?php
namespace App\Http\Controllers;

use Serverfireteam\Panel\CrudController;
use \Illuminate\Routing\Controllers;

class ProjectController extends CrudController {
    
    
    public function all($entity){
        
        parent::all($entity); 

        $this->filter = \DataFilter::source(new \App\Project());
        $this->filter->add('id', 'ID', 'text');
        $this->filter->add('name', 'Name', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();
                
        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('id','ID', true)->style("width:100px");
        $this->grid->add('desc', 'desc', true);
        $this->grid->add('url', 'url', true);
        $this->addStylesToGrid();           
                       
        return $this->returnView();
    }

    public function edit($entity) {

        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\Project());

        $this->edit->label('Edit Project');
        $this->edit->add('name', 'Name', 'text')->rule('required|min:2');
        $this->edit->add('desc', 'desc', 'text')->rule('required|min:5');
        $this->edit->add('url', 'url', 'text');
        $this->edit->add('pic1', 'Photo-1', 'image')->move('uploads/website/');
        $this->edit->add('pic2', 'Photo-2', 'image')->move('uploads/website/');
        $this->edit->add('pic3', 'Photo-3', 'image')->move('uploads/website/');

        return $this->returnEditView();
    }
}
