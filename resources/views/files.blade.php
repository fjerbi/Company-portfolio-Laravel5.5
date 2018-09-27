this is the files

	<?php foreach ($files as $file): ?>




    <a href="{{asset('storage/'.$file->file_upload)}}" target="_blank">
    <img src="http://www.iconarchive.com/download/i34230/treetog/i/Documents.ico"  width="104" height="142">
  </a>
    <?php endforeach; ?>
