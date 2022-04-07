<div class="card font">
        <div class="card__elem"> {{$book->title}}</div>
        <img src={{$book->cover}} alt="Обложка" class="card__elem-img">
        <div class="card__elem">{{$book->genre->name}}</div>
        <div class="card__elem">{{$book->author->name}}</div>
    </div>

    

