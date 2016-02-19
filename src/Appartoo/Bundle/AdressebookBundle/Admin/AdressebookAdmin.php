<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Appartoo\Bundle\AdressebookBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of AdressebookAdmin
 *
 * @author WADDIZ
 */
class AdressebookAdmin extends Admin{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('email', 'text')
                    ->add('phone', 'text')
                    ->add('adresse', 'text')
                    ->add('website', 'text');
    }
    protected function configureRoutes(RouteCollection $collection)
    {
        

    }
    public function getBatchActions()
    {
        return null;
    }
    public function getExportFormats()
    {
        return array();
    }

    public function getExportFields()
    {
        return null;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('email')
                    ->addIdentifier('phone')
                    ->addIdentifier('adresse')
                    ->addIdentifier('website')
                    ->add('_action', 'actions', array(
                            'actions' => array(
                                'edit' => array(),
                                'delete' => array(),
                            )
                        ));
    }
}
