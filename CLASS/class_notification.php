<?php
class Notification{
    private $notification_id;
    private $message;
    
    public function __construct($notification_id, $message){
        $this->notification_id = $notification_id;
        $this->message = $message;
    }
  public function getNotificationId(){
        return $this->notification_id;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }
}
?>