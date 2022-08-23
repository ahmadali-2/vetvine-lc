@forelse ($news as $new)
<div class="col-md-12 mb-3">

    <div class="content">
        <div class="heading d-flex align-items-center">
            <img src="{{ asset('frontend/images/arrow.png') }}" alt="" width="16" height="18">
            <h3>{{ $new->news_title }}</h3>

        </div>
        <p class="ml-4"><p id="text_{{ $new->id }}">{!! Str::limit($new->news_description, 240) !!}</p><a style="cursor: pointer; font-weight: bold; color:#f27222" show-desc="{{ $new->news_description }}" news-id={{ $new->id }}  show-text="1" class="read_more">Read More</a></p>

    </div>

</div>
@empty
Not Found
@endforelse
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.content a').click(function() {
            var reference = $(this);
            var show_text = $(this).attr('show-text');
            var show_desc = $(this).attr('show-desc');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: "POST",
                url: '/show-more',
                data: {
                    show_text: show_text,
                    show_desc: show_desc,
                },
                success: function(data) {
                    reference.attr('show-text', data.show_text);
                    var textref = '#text_'+reference.attr('news-id');
                    $(textref).empty();
                    $(textref).append(data.description);
                    reference.empty();
                    reference.append(data.button_text);
                }
            });
        });
    });
</script>
