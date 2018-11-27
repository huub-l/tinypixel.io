<div class="post-list">
  @foreach($posts as $post)
    @include('components.post-list-item', $post)
  @endforeach
</div>