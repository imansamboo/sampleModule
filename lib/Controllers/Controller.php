<?php
namespace WHMCS\Module\Addon\AddonModule\Controllers;
use Twig_Loader_Filesystem;
use Twig_Environment;

/**
 * Created by PhpStorm.
 * User: iman
 * Date: 10/8/18
 * Time: 3:48 PM
 */


abstract class Controller
{
    protected $modelName;

    /**
     * @param $smarty
     */
    public function index($smarty)
    {
        $this->template($smarty);
        //$model = new $this->modelName;
        //$this->template(__FUNCTION__ .'.php',['args' => $model->all() , 'modelName'=> $model->name] );
    }

    /**
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function create($smarty)
    {
        $this->template(__FUNCTION__.'.php',[] );
    }

    /**
     * @param $post
     */
    public function store($smarty, $post)
    {
        ($this->modelName)::create($post);
        return $this->index($smarty);
    }

    /**
     * @param $id
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function show($smarty, $id)
    {
        $factor = ($this->modelName)::findOrFail($id);
        $this->template(__FUNCTION__.'.php',['factor' =>$factor] );
    }

    /**
     * @param $id
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function edit($smarty, $id)
    {
        $factor = ($this->modelName)::findOrFail($id);
        $this->template(__FUNCTION__.'.php',['factor' =>$factor] );
    }

    /**
     * @param $post
     * @param $id
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function update($smarty, $post, $id)
    {
        $factor = ($this->modelName)::findOrFail($id);
        $factor->update($post);

        return $this->show($smarty, $id);
    }

    /**
     * @param $id
     */
    public function destroy($smarty, $id)
    {
        ($this->modelName)::destroy($id);

        return $this->index($smarty);
    }

    /**
     * @param $tmp
     * @param $args
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public  function template($smarty, $tmp = null, $args = null)
    {
        try{
            $smarty->assign('name', 'george smith');
            $smarty->caching = false;
            $smarty->compile_dir = $GLOBALS['templates_compiledir'];
            // display file from template folder within add-on folder
            $smarty->display(dirname(__FILE__) . '/../../templates/sample.tpl');
            /*$loader = new Twig_Loader_Filesystem(
                __DIR__ .'/../views/'
                .substr(
                    $this->modelName,
                    strpos($this->modelName,'s\\')+2,
                    strlen($this->modelName)
                )
            );
            $twig = new Twig_Environment($loader);
            $template = $twig->load($tmp);
            echo $template->render($args);*/
        } catch (Exception $e) {
            die ('ERROR: ' . $e->getMessage());
        }
    }






}