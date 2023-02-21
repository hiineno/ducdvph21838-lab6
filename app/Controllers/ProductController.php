<?php

    namespace App\Controllers;
    
    use App\Models\ProductModel;
use App\Request;
 class ProductController extends Controller{

   

function index()
{
    $mess = '';
    $db = new ProductModel();
    $products = $db-> all();
    if(!empty($_COOKIE['mess'])){
        $mess = $_COOKIE['mess'];
    }
    $this->view('list', ['products' => $products,'mess'=>$mess]);
}

public function edit(Request $request){
    $id = $request->getBody()['id'];
    $db = new ProductModel();
    $data['product'] = $db->findOne($id);
    $this->view('edit',$data);
}

public function editpost(Request $request){
    $data = $request->getBody();
        $id = $data['id'];
        unset($data['id']) ;
        if(!empty($_FILES['image'])){
            $data['image']= $_FILES['image']['name'];
            $image = $_FILES['image']['tmp_name'];
            move_uploaded_file($image,'./image/'.$data['image']);
        }
        $db = new ProductModel();
        $db->update($id, $data);
        setcookie('mess',"da sua thanh copng",time()+1);
         header("location:/index");
}

public function themget(){
        echo 'hehehe';
    $this->view('addproduct');

}
public function thempost(Request $request){
    $data = $request->getBody();
    if(!empty($_FILES)){
       $data['image'] = $_FILES['image']['name'];
       $image = $_FILES['image']['tmp_name'];
       move_uploaded_file($image,'./image/'.$data['image']);
    };

  

        $db = new ProductModel;
        $db->insert($data);
        setcookie('mess','themthanhcong',time()+1);
        header("location:/index");
    }

   



public function delete(Request $request){
    $id = $request->getBody()['id'];

    $db = new ProductModel();
    $db->delete($id); 
    setcookie('mess','xoa thanh cong roi ne',time()+1);
    header("Location:index");
}

 }
