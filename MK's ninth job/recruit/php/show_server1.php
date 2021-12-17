<?php
require './connect/connect.php';
class show_server1{
    public function setReturn($code){
        $message=array(
            0=>'success',
            1=>'fail',
        );
        $result=array(
            'code'=>$code,
            'message'=>$message($code)
        );
        return json_encode($result);
    }
    public function setReturns($code,$checkAll,$data){
        $result=array(
            'code'=>$code,
            'checkAll'=>$checkAll,
            'data'=>$data
        );
        return json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    public function show_image(){
        global $conn;
        $stmt=mysqli_prepare($conn,"SELECT image FROM stu_recruit where id=?");
        $stmt->bind_param('i',$id);
        mysqli_stmt_execute($stmt);
        $result = $conn->query($stmt);
        $stmt->close();
        $image = $result->fetch_assoc();
        return base64_encode($image['image']);}
    public function show(){
        global $conn;
        $stmt=mysqli_prepare($conn,"SELECT stu_num, stu_name, qq, phone_num, remarks FROM stu_recruit where id=?");
        $stmt->bind_param('i',$id);
        mysqli_stmt_execute($stmt);
        $result = $conn->query($stmt);
        $stmt->close();
        if($result->num_rows>0){
            return $this->setReturns(0,'success', $result);
        }
        else{
            return $this->setReturn(1);
        }
    }
}
