<?php
 function time_passed($time) {

	// Calculate difference between current
	// time and given timestamp in seconds
	$diff	 = time() - $time;
	
	// Time difference in seconds
	$sec	 = $diff;
	
	// Convert time difference in minutes
	$min	 = round($diff / 60 );
	
	// Convert time difference in hours
	$hrs	 = round($diff / 3600);
	
	// Convert time difference in days
	$days	 = round($diff / 86400 );
	
	// Convert time difference in weeks
	$weeks	 = round($diff / 604800);
	
	// Convert time difference in months
	$mnths	 = round($diff / 2600640 );
	
	// Convert time difference in years
	$yrs	 = round($diff / 31207680 );
	
	// Check for seconds
	if($sec <= 60) {
		$timeAgo =  "$sec seconds ago";
	}
	
	// Check for minutes
	else if($min <= 60) {
		if($min==1) {
			$timeAgo =  "one minute ago";
		}
		else {
			$timeAgo =  "$min minutes ago";
		}
	}
	
	// Check for hours
	else if($hrs <= 24) {
		if($hrs == 1) {
			$timeAgo =  "an hour ago";
		}
		else {
			$timeAgo = "$hrs hours ago";
		}
	}
	
	// Check for days
	else if($days <= 7) {
		if($days == 1) {
			$timeAgo =  "Yesterday";
		}
		else {
			$timeAgo =  "$days days ago";
		}
	}
	
	// Check for weeks
	else if($weeks <= 4.3) {
		if($weeks == 1) {
			$timeAgo =  "a week ago";
		}
		else {
			$timeAgo =  "$weeks weeks ago";
		}
	}
	
	// Check for months
	else if($mnths <= 12) {
		if($mnths == 1) {
			$timeAgo =  "a month ago";
		}
		else {
			$timeAgo =  "$mnths months ago";
		}
	}
	
	// Check for years
	else {
		if($yrs == 1) {
			$timeAgo =  "one year ago";
		}
		else {
			$timeAgo =  "$yrs years ago";
		}
	}
    echo $timeAgo;
}
?>
<div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Boîte des récèptions</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <div class="float-right">
                 <?php echo count($messages).' messages';?>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <?php

                   foreach($messages as $message){ ?>  
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html"><?=$message['name_sender']?></a></td>
                    <td class="mailbox-subject"><b><?=$message['subject'];?></b> - <?=$message['message']?>...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?php time_passed(strtotime($message['time']))?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
        </div>