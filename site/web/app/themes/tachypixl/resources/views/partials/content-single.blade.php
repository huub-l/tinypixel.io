<article @php post_class() @endphp>
  <header class="sans-serif">
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="fn fl-ns w-50-ns f5 lh-copy measure mt0-ns">
    {!! content  !!}
  </div>
  <footer class="fl w-100 pa2">
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
