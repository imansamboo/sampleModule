<?php
namespace WHMCS\Module\Addon\AddonModule\Client\Controllers;
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
        $model = new $this->modelName;
        if(isset($_GET['api']) && $_GET['api'] == 'api'){
            header('Content-Type: application/json');
            echo json_encode($model->where('user_id', '=', $_SESSION['uid'])->get());
            exit();
            //return json_encode($model->all());
        }
        $this->template($smarty, __FUNCTION__ .'.php' ,  $model->where('user_id', '=', $_SESSION['uid'])->get());
    }

    /**
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function create($smarty)
    {
        $this->template($smarty,__FUNCTION__.'.php',[] );
    }

    /**
     * @param $post
     */
    public function store($smarty , $post)
    {
        ($this->modelName)::create($post);
        return $this->index($smarty);
    }

    /**
     * @param $id
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     * @throws \Exception
     */
    public function show($smarty, $id)
    {
        $factor = ($this->modelName)::findOrFail($id);
        if($factor->user_id == $_SESSION['uid']){
            $this->template($smarty, __FUNCTION__.'.php',$factor );
        } else{
            return $this->index($smarty);
        }
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
        if($factor->user_id == $_SESSION['uid']){
            $this->template($smarty, __FUNCTION__.'.php',$factor );
        } else{
            return $this->index($smarty);
        }
    }

    /**
     * @param $post
     * @param $id
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     * @throws \Exception
     */
    public function update($smarty, $post, $id)
    {
        $factor = ($this->modelName)::findOrFail($id);
        if($factor->user_id == $_SESSION['uid']) {
            $factor->update($post);
            return $this->show($smarty, $id);
        }else{
            return $this->index($smarty);
        }
    }

    /**
     * @param $id
     */
    public function destroy($smarty, $id)
    {
        $factor = ($this->modelName)::findOrFail($id);
        if($factor->user_id == $_SESSION['uid']) {
            ($this->modelName)::destroy($id);
            return $this->index($smarty);
        }else{
            return $this->index($smarty);
        }
    }

    /**
     * @param $tmp
     * @param $args
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public  function template($smarty, $tmp = 'index.php', $args = null)
    {
        try{
            $smarty->assign('args', $args);
            $smarty->caching = false;
            $smarty->compile_dir = $GLOBALS['templates_compiledir'];
            // display file from template folder within add-on folder
            $smarty->display(dirname(__FILE__) . '/../templates/'.
                substr(
                    $this->modelName,
                    strrpos($this->modelName,'\\')+1
                )
                .
                '/'
                .$tmp);
        } catch (Exception $e) {
            die ('ERROR: ' . $e->getMessage());
        }
    }
}