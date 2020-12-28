@foreach($category as $category)
<li class="dropdown">
    <a href="{{$category->id}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$category->name}}<span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
        @foreach($category->product as $product)
        <li><a href="{{$product->id}}">{{$product->name}}</a></li>
        @endforeach
    </ul>

</li>
@endforeach
