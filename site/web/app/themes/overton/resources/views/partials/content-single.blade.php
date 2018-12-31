<header>
  <h1 class="entry-title">{{ get_the_title() }}</h1>
  @include('partials.components.entry-meta-author')
</header>
<main class="main" role="document">
  @php the_content() @endphp
</main>
<footer>
  {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</footer>
