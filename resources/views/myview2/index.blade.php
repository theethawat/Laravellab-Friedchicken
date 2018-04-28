@extends("myview2.template")
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-8">
<h5>รายการไก่ที่สั่ง</h5>
@foreach($buyingfriedchicken as $buy)
<div class="card">
<div class="card-body">
    <div class="flex" style="display:flex;">
    <div style="width:90%;" >
      รหัสรายการ {{$buy->ID}} ชื่อผู้สั่ง {{$buy->Customer}}  
      <h4>รูปแบบไก่ {{$buy->Typeofchicken}}  จำนวน {{$buy->Amout}} ชิ้น </h4>        
      <p>เวลาที่สั่งซื้อ {{$buy->updated_at}} </p>
      </div>
      <a href="editOrder/{{$buy->ID}}"><button class="btn btn-light">แก้ไข</button></a>
      <a href="delete/{{$buy->ID}}"><button class="btn btn-light">ลบ</button></a>
      </div>
  </div> </div>
<br>

@endforeach
<br>
</div><!-- for col-sm-8 -->


<div class="col-sm-4">
<h5>สั่งซื้อไก่ทอด</h5>
<p>กรอกข้อมูลตามแบบฟอร์มต่อไปนี้</p>
<div class="card"><div class="card-body">


<form role="form"  action="addorder" method="POST">
ชื่อผู้สั่ง
<input type="text" class="form-control" required name="customer" id="customer">
รูปแบบไก่

  <select class="form-control" name="typeofchicken" id="typeofchicken">
    <option value="Original">Original รสดั้งเดิม </option>
    <option value="Crispy">Crispy กรอบ </option>
    <option value="Black Peper">Black Peper พริกไทยดำ</option>
    <option value="Fish Source"> Fish Source ไก่ทอดน้ำปลา</option>
  </select>

จำนวนที่จะสั่งซื้อ
<div style="display:flex;">
<input type="number" class="form-control" style="width:30%;" name="amout" id="amout">
ชิ้น
</div>
<br>
<button type="submit" class="btn btn-primary">สั่งซื้อ</button>

</form>



</div></div>
<br>
</div>
</div><!--for row-->

</div><!--for container-->
@endsection