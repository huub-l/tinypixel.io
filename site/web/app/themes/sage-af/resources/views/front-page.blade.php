@extends('layouts.cover')

@section('content')
    @while (have_posts()) @php the_post() @endphp
      <section class="section">
        <h2>Veterans taking action against militarism and endless wars</h2>
        <p>We are Post-9/11 service members and veterans organizing to end a foreign policy of permanent war and the use of military weapons, tactics, and values in communities across the country. As people intimately familiar with the inner workings of the world's largest military, we use our knowledge and experiences to expose the truth about these conflicts overseas and the growing militarization in the United States.</p>
      </section>
      <section class="section">
        <h4 class="tracked">Veterans Day 2018</h4>
        <h2>About Face Veterans Shut Down Liberty Medal Ceremony Awarding George W. Bush For His “Commitment to Veterans” on Veterans Day</h2>
        <p>About Face: Veterans Against the War members are in formation and blocking entrance to the Liberty Medal presentation ceremony at the National Constitution Center where Joe Biden is slated to present George W. Bush with the award for his “commitment to veterans.”</p>
        <p>They are refusing to allow Bush’s legacy rehabilitation tour continue in their name while the wars he started continue to devastate lives both here and abroad.</p>
        <div class="mt3 pt2"><a class="mdc-button mdc-theme--secondary-bg secondary mdc-button--raised ripple" href="/about-face-veterans-shut-down-liberty-medal-ceremony-awarding-george-w-bush-for-his-commitment-to-veterans-on-veterans-day">Watch and learn how you can support</a></div>
      </section>
    @endwhile
@endsection
