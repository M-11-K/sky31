<?php
require './connect/connect.php';
class change_server{
    public function setReturn($code){
        $message=array(
            0=>'undefined index',
            1=>'success',
            2=>'fail'
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
        public function change($new_stu_num,$new_stu_name){
        if($new_stu_name==""||$new_stu_num==""){
            return $this->setReturn(0);
        }
        global $conn;
        $stmt=mysqli_prepare($conn,"UPDATE stu SET stu_name=?,stu_number=? where id=?");
        $stmt->bind_param('ssi',$new_stu_num,$new_stu_num,$id);
        mysqli_stmt_execute($stmt);
        $stmt->bind_result($stmt,$new_stu_num,$new_stu_name);
            while($stmt->fetch()) {
                $result = array();
                $result["stu_num"] =$new_stu_num;
                $result["stu_name"] =$new_stu_name;
            }
            $stmt->close();
        if(empty($result)==false){
            return $this->setReturns(1,'success', $result);
        }
        else{
            return $this->setReturn(2);
        }

        }

}