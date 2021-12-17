<?php
require './connect/connect.php';
class change_server1{
    public function setReturn($code){
        $message=array(
            0=>'success',
            1=>'fail',
            2=>'Illegal format'
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
    public function change($new_stu_num,$new_stu_name,$new_qq,$new_phone_num,$new_remarks,$new_image){
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)==false){
            return $this->setReturn(2);
        }
        global $conn;
        $stmt=mysqli_prepare($conn,"UPDATE stu_recruit SET stu_name=?,stu_num=?,qq=?,phone_num=?,remarks=?,image=? where id=?");
        $stmt->bind_param('ssiisb',$new_stu_num,$new_stu_name,$new_qq,$new_phone_num,$new_remarks,$new_image,$id);
        mysqli_stmt_execute($stmt);
        $stmt->bind_result($stmt,$stu_num,$stu_name,$qq,$phone_num,$remarks,$image);
        while($stmt->fetch()) {
            $result = array();
            $result["stu_num"] =$stu_num;
            $result["stu_name"] =$stu_name;
            $result["qq"] =$qq;
            $result["phone_num"] =$phone_num;
            $result["remarks"] =$remarks;
            $result["image"] =$image;
        }
        $stmt->close();
        if(empty($result)==false){
            return $this->setReturns(0,'success', $result);
        }
        else{
            return $this->setReturn(1);
        }
    }

}