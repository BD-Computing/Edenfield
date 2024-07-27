<span>
    @for ($i = 0; $i < $settings->stars; $i++)
        <i class="star-rating"></i>
    @endfor
    @for ($i = 0; $i < 5 - $settings->stars; $i++)
        <i class="star-rating-grey" style="color: grey"></i>
    @endfor
</span>
