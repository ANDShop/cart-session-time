<div class='wrap'>
  <h2>Cart Session Time</h2>
  <p>
    <?php echo htmlspecialchars($cst_current_title, ENT_QUOTES, 'UTF-8'); ?>：<?php echo htmlspecialchars($time_val_d, ENT_QUOTES, 'UTF-8'), htmlspecialchars($cst_day_txt, ENT_QUOTES, 'UTF-8'), htmlspecialchars($time_val_h, ENT_QUOTES, 'UTF-8'), htmlspecialchars($cst_hour_txt, ENT_QUOTES, 'UTF-8'), htmlspecialchars($time_val_m, ENT_QUOTES, 'UTF-8'), htmlspecialchars($cst_minute_txt, ENT_QUOTES, 'UTF-8'); ?>
  </p>
  <form name='form1' method='post' class='time-set-form'>
    <input type='number' name='<?php echo htmlspecialchars($time_name_d, ENT_QUOTES, 'UTF-8'); ?>' value='<?php echo htmlspecialchars($time_val_d, ENT_QUOTES, 'UTF-8'); ?>' step='1' min='0' max='999' placeholder='day' <?php echo htmlspecialchars($disabled, ENT_QUOTES, 'UTF-8'); ?> /><?php echo htmlspecialchars($cst_day_txt, ENT_QUOTES, 'UTF-8'); ?>

    <input type='number' name='<?php echo htmlspecialchars($time_name_h, ENT_QUOTES, 'UTF-8'); ?>' value='<?php echo htmlspecialchars($time_val_h, ENT_QUOTES, 'UTF-8'); ?>' step='1' min='0' max='24' placeholder='hour' class='number' />
    <?php echo htmlspecialchars($cst_hour_txt, ENT_QUOTES, 'UTF-8'); ?>(0~24)

    <input type='number' name='<?php echo htmlspecialchars($time_name_m, ENT_QUOTES, 'UTF-8'); ?>' value='<?php echo htmlspecialchars($time_val_m, ENT_QUOTES, 'UTF-8'); ?>' step='1' min='0' max='60' placeholder='minute' class='number' <?php echo htmlspecialchars($disabled, ENT_QUOTES, 'UTF-8'); ?> />
    <?php echo htmlspecialchars($cst_minute_txt, ENT_QUOTES, 'UTF-8'); ?>(0~60)

    <hr />

    <p class='submit'><input type='submit' name='submit' class='button-primary' value='<?php echo htmlspecialchars($cst_submit_txt, ENT_QUOTES, 'UTF-8'); ?>' /></p>


    <style>
      .time-set-form .number {
        width: 70px !important;
      }

      hr {
        margin-top: 30px;
      }

      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
        opacity: 1;
      }
    </style>