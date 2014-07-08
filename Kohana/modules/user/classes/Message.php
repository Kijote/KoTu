<?php

class Message {

   public static function remove($type = null){
      // get session messages
      $messages = Session::instance()->get('messages');
      // if not is null $type and $messages is an array
      if(!is_null($type) && is_array($messages)){
         unset($messages[$type]);
      } else {
         $messages = array();
      }
      // set messages
      Session::instance()->set('messages', $messages);
   }

   public static function add($type, $message) {

      // get session messages
      $messages = Session::instance()->get('messages');
      // initialize if necessary
      if(!is_array($messages)) {
         $messages = array();
      }
      // append to messages
      $messages[$type][] = $message;
      // set messages
      Session::instance()->set('messages', $messages);

   }

   public static function count() {
      return count(Session::instance()->get('messages'));
   }

   public static function output() {
      $str = '';
      $messages = Session::instance()->get('messages');
      Session::instance()->delete('messages');

      if(!empty($messages)) {
         foreach($messages as $type => $messages) {
            foreach($messages as $message) {
               $str .= '<div class="'.$type.'">'.$message.'</div>';
            }
         }
      }
      return $str;
   }

}