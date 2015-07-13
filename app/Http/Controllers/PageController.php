<?php
namespace App\Http\Controllers;

use Serverfireteam\Panel\CrudController;
use \Illuminate\Routing\Controllers;

class PageController extends CrudController {
    
    public function all($entity){
        parent::all($entity); 

        $this->filter = \DataFilter::source(new \App\Page());
        $this->filter->add('id', 'ID', 'text');
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();
        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('id','ID', true)->style("width:100px");
        $this->grid->add('title','Title');
        $this->addStylesToGrid();          

        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\Page());

        $this->edit->label('Edit Pages');
        $this->edit->add('title','Title', 'text')->rule('required|min:5');
        $this->edit->add('slug','Page url slug', 'text')->rule('required|min:5');
        $this->edit->add('content','Content', 'redactor');
        $this->edit->add('public','Public','checkbox');
        return $this->returnEditView();
    }
}
