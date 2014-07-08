<script type="text/javascript">  
   $(document).ready(function(){
      $(".content").before($(".error"));
      $(".error").first().remove();
   });
</script>
   <div class="content">
      <p><?php echo __('Please send me a link to reset my password.'); ?></p>
<?php
echo Form::open('user/forgot');
echo '<p>'.__('Your email address:').' '.Form::input('reset_email', '', array('class' => 'text')).'</p>';
?>

<?php
echo Form::submit(NULL, __('Reset password'));
echo Form::close();
?>
   </div>

