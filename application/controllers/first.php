<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class first extends Application
{

        function __construct()
	{
		parent::__construct();
	}
	/**
	 * Homepage for our app
	 */
	public function index()
	{
		
            //load data from model
            $source = $this->quotes->get(1);
            //get quote
            $this->data['what'] = $source['what'];
            $this->data['who'] = $source['who'];
            $this->data['mug'] = $source['mug'];
            //load view
            $this->data['pagebody'] = 'justone';
            $this->render();
                
	}
        
        
        public function zzz()
        {
            //load data from model
            $source = $this->quotes->get(1);
            //get quote
            $this->data['what'] = $source['what'];
            $this->data['who'] = $source['who'];
            $this->data['mug'] = $source['mug'];
            //load view
            $this->data['pagebody'] = 'justone';
            $this->render();
        }
        
        public function gimme($id)
        {
            //load data from model
            $source = $this->quotes->get($id);
            //get quote
            $this->data['what'] = $source['what'];
            $this->data['who'] = $source['who'];
            $this->data['mug'] = $source['mug'];
            //load view
            $this->data['pagebody'] = 'justone';
            $this->render();
        }
        
        
        
}