<h3>Reviews:</h3>

<ul>
@foreach ($reviews as $review)
<li>{{$review->text}}</li>


@can('admin')
  <form action="{{ route('review.destroy', $review->id) }}" method="post">
    @method('DELETE')
    @csrf
    <br>
    <button id="delete">Delete</button>
 
  </form>
@endcan


@endforeach
</ul>