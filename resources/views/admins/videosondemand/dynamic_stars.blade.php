<?php
    $remainingRating = floor(5 - $average_rating);
?>
@for ($i = 1; $i <= $average_rating; $i++)
    <span class="fas fa-star" style="color: #FFC300"></span>
@endfor
@for ($i = 1; $i <= $remainingRating; $i++)
    <span class="fa fa-star-o" style="color: #FFC300"></span>
@endfor
