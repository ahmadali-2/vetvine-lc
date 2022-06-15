@foreach ($posts as $forumpost )
<tr>
    <td>    <a href="{{ route('getForumcategoryPosts',$forumpost->id) }}"><h4>{{ $forumpost->post_title ?? '' }}</h4></a> </td>

    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td class="d-flex align-items-center"><img src={{ asset('frontend/forums/img/user.png') }}  class="mr-1" alt="">Nov 22,202</td>
    <td><img src="{{ asset('frontend/forums/img/dots.png') }}" alt=""></td>
</tr>
@endforeach