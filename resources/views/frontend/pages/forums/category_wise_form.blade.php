@forelse ($forums as $forum )

<tr>
    <td>    <a href="{{ route('getForumPosts',$forum->id) }}"><h4>{{ $forum->forum_title ?? '' }}</h4></a> </td>

    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td class="d-flex align-items-center"><img src={{ asset('frontend/forums/img/user.png') }}  class="mr-1" alt="">Nov 22,202</td>
    <td><img src="{{ asset('frontend/forums/img/dots.png') }}" alt=""></td>
</tr>

@empty
   <h3 id="category_wise_notFound">Not Found</h3>
@endforelse