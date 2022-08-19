<div id="news_data_search">
    @include('frontend.pages.news.loop-news')
</div>

<div>
    <div class="col-md-12 pagination_col my-5">
        <ul class="pagination pagination-lg">
            {{ $news->links() }}
        </ul>
    </div>
</div>


