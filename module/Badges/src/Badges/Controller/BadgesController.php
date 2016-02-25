<?php
namespace Badges\Controller;
 
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
 
class BadgesController extends AbstractRestfulController
{
    public function getList()
    {
        \Zend\Debug\Debug::dump('getList'); exit;
        return new JsonModel();
    }
 
    public function get($id)
    {
        \Zend\Debug\Debug::dump('get');
        \Zend\Debug\Debug::dump($id);
        exit;
        return new JsonModel();
    }
 
    public function create($data)
    {
        \Zend\Debug\Debug::dump('create');
        \Zend\Debug\Debug::dump($data);
        exit;
        return new JsonModel();
    }
 
    public function update($id, $data)
    {
        \Zend\Debug\Debug::dump('update');
        \Zend\Debug\Debug::dump($id);
        \Zend\Debug\Debug::dump($data);
        exit;
        return new JsonModel();
    }
 
    public function delete($id)
    {
        \Zend\Debug\Debug::dump('delete');
        \Zend\Debug\Debug::dump($id);
        exit;
        return new JsonModel();
    }
}