<?php
function news_parse($title, $content, $date, $icon = 0, $author = '', $comments = '')
{
	global $template_path;
	return '
	<div class="my-3 p-3 bg-white rounded box-shadow">
      <h6 class="border-bottom border-gray pb-2 mb-0">' . stripslashes($title) . '</h6>
      <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-white">'. $author .'</strong>
		  '. $content .'
        </p>
          </div>    
    </div> ';
}
?>

