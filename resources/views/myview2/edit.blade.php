@extends("myview2.template")
@section("content")
<div class="container">
<div class="col-sm-8">
<form role="form"  action="../submitEdit/{{$buyingfriedchicken->ID}}" method="POST">
ชื่อผู้สั่ง
<input type="text" class="form-control" required name="customer" id="customer" value="{{$buyingfriedchicken->Customer}}">
รูปแบบไก่

  <select class="form-control" name="typeofchicken" id="typeofchicken" value="{{$buyingfriedchicken->typeofchicken}}">
    <option value="Original">Original รสดั้งเดิม </option>
    <option value="Crispy">Crispy กรอบ </option>
    <option value="Black Peper">Black Peper พริกไทยดำ</option>
    <option value="Fish Source"> Fish Source ไก่ทอดน้ำปลา</option>
  </select>

จำนวนที่จะสั่งซื้อ
<div style="display:flex;">
<input type="number" class="form-control" style="width:30%;" name="amout" id="amout" value="{{$buyingfriedchicken->Amout}}" >
ชิ้น
</div>
<br>
<button type="submit" class="btn btn-primary">แก้ไขการสั่งซื้อ</button>

</form>
</div>
</div>
<br>
@endsection