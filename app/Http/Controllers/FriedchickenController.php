<?php 

namespace App\Http\Controllers;

use App\Comment; //ลิงค์ค่ามาจากไฟล์คอมเมนต์
use Illuminate\Support\Facades\Input; //ใช้คำสั่ง Input
use Illuminate\Support\Facades\DB;  //ใช้คำสั่ง DB หรือ Database
use Illuminate\Support\Facades\Redirect; //ใช้คำสั่ง Redirect


class FriedchickenController extends Controller{
    public function index(){
        $friedchicken=Comment::orderBy('ID','DESC')->get();//ดึงค่าจาก Comment เรียงตาม ID แบบ DESC
        return view('myview2.index') //ส่งค่าออกเป็นหน้า myview2.index
            ->with('title','Guestbook buyingfriedchicken')
            ->with('buyingfriedchicken',$friedchicken); //ส่งค่าตัวแปร friedchicken ออกไปในชื่อ buyingfriedchicken
    }
    public function reindex(){
        return Redirect::to('myview2/index');
    }
    public function addorder(){
        $friedchicken= new Comment; 
        //รับค่าข้อมูล
        $friedchicken->Customer=Input::get('customer');
        $friedchicken->Typeofchicken=Input::get('typeofchicken');
        $friedchicken->Amout=Input::get('amout');
        //บันทึกค่าข้อมูล
        $friedchicken->save();
        //Redirect กลับไปหน้าเดิม
        return Redirect::to('myview2/index'); 
    } 
    public function delete($id){
        $friedchicken=Comment::find($id);
        DB::table('buyingfriedchicken')->where('ID', '=', $id)->delete();
       return Redirect::to('myview2/index');
    }

    public function editOrder($id){
        $friedchicken=Comment::find($id);
        return view('myview2.edit')
        ->with('buyingfriedchicken',$friedchicken);
    }
    
    public function submitEdit($id){
        $friedchicken=Comment::find($id);
        $friedchicken->Customer=Input::get('customer');
        $friedchicken->Typeofchicken=Input::get('typeofchicken');
        $friedchicken->Amout=Input::get('amout');
        $friedchicken->save();
        DB::table('buyingfriedchicken')
            ->where('ID', $id)
            ->update(['Customer' => $friedchicken->Customer,'Typeofchicken' => $friedchicken->Typeofchicken,
            'Amout' => $friedchicken->Amout]);
        return Redirect::to('myview2/index');
    }
}
?>