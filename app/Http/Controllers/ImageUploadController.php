<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Postimage;
    

class ImageUploadController extends Controller
{

    public function updateData(Request $request){
        include 'koneksi.php';
 
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        
        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data['image']= $filename;
        }
        
        mysqli_query($koneksi,"update produk set name='$name', price='$price', category='$category', description='$description', image='$filename' where id='$id'");
        $data->save();
        return view('list');
    }

    public function storeImage(Request $request){
        include 'koneksi.php';
 
        
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];              

        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data['image']= $filename;
        }
        mysqli_query($koneksi,"insert into produk (name, price, category, description, image) values('$name','$price','$category','$description','$filename')");
        $data->save();
        return view('list');
       
    }

    public function hapusData(Request $request){
        include 'koneksi.php';
 
        $id = $_GET['id'];
        
        mysqli_query($koneksi,"delete from produk where id='$id'");
        return view('list');
    }
}
