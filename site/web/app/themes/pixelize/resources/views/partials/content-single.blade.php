<article @php post_class() @endphp>
{!! the_content() !!}
</article>
@include('components.post-list', array( 'posts' => App::get_recent_posts()))