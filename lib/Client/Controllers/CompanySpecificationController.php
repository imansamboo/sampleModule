<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 9/29/18
 * Time: 4:41 PM
 */

namespace WHMCS\Module\Addon\AddonModule\Client\Controllers;

class CompanySpecificationController extends Controller
{
    protected $modelName = 'WHMCS\Module\Addon\AddonModule\Client\Models\CompanySpecification';

    /**
     * @param $smarty
     */
    public function index($smarty)
    {
        $model = new $this->modelName;
        if(isset($_GET['api']) && $_GET['api'] == 'api'){
            header('Content-Type: application/json');
            echo json_encode($model->where(
                array(
                    ['user_id', '=', $_SESSION['uid']],
                    ['visibility', '=', 1]
                )
            )->get());
            exit();
            //return json_encode($model->all());
        }
        $this->template($smarty, __FUNCTION__ .'.php' ,  $model->where(
            array(
                ['user_id', '=', $_SESSION['uid']],
                ['visibility', '=', 1])
        )->get());
    }

    /**
     * @param $post
     */
    public function store($smarty , $post)
    {
        $post['visibility'] = 1;
        $post['user_id'] = $_SESSION['uid'];
        ($this->modelName)::create($post);
        return $this->index($smarty);
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
        if($factor->user_id == $_SESSION['uid'] && $factor->visibility == 1){
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
        $post['user_id'] = $_SESSION['uid'];
        $factor = ($this->modelName)::findOrFail($id);
        if($factor->name == $_POST['name']){
            $_POST['name'] = $_POST['name']. mt_rand();
        }
        if($factor->user_id == $_SESSION['uid'] && $factor->visibility == 1){
            $this->destroy($smarty,  $id);
            $this->store($smarty,array_diff_key($_POST,array('token'=>rand())));
        } else{
            return $this->index($smarty);
        }
    }

    /**
     * @param $id
     */
    public function destroy($smarty, $id)
    {
        $factor = ($this->modelName)::findOrFail($id);
        if($factor->user_id == $_SESSION['uid'] && $factor->visibility == 1) {
            $factor->update(['visibility' => 0]);
        }
        return $this->index($smarty);
    }

}